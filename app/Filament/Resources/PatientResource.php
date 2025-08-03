<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PatientResource\Pages;
use App\Models\PatientResource as PatientResourceModel;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PatientResource extends Resource
{
    protected static ?string $model = PatientResourceModel::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationGroup = 'Clinic Management';

    protected static ?int $navigationSort = 3;

    protected static ?string $slug = 'patient-resources';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Resource Information')
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->label('Resource Title')
                            ->required()
                            ->placeholder('Patient Forms')
                            ->maxLength(255),
                        
                        Forms\Components\TextInput::make('slug')
                            ->label('URL Slug')
                            ->helperText('Auto-generated from title, but can be customized')
                            ->maxLength(255),
                        
                        Forms\Components\Select::make('resource_type')
                            ->label('Resource Type')
                            ->options([
                                'page' => 'Information Page',
                                'form' => 'Downloadable Form',
                                'link' => 'External Link',
                                'info' => 'General Information',
                            ])
                            ->default('page')
                            ->required(),
                    ])->columns(2),

                Forms\Components\Section::make('Content')
                    ->schema([
                        Forms\Components\RichEditor::make('content')
                            ->label('Content')
                            ->columnSpanFull()
                            ->toolbarButtons([
                                'bold',
                                'italic',
                                'underline',
                                'strike',
                                'link',
                                'bulletList',
                                'orderedList',
                                'h1',
                                'h2',
                                'h3',
                                'h4',
                                'blockquote',
                                'codeBlock',
                                'clean',
                            ])
                            ->extraInputAttributes(['class' => 'rich-content-editor'])
                            ->visible(fn (Forms\Get $get): bool => $get('resource_type') === 'page'),
                        
                        Forms\Components\FileUpload::make('file_path')
                            ->label('File Upload')
                            ->acceptedFileTypes(['application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'])
                            ->directory('patient-resources')
                            ->visibility('public')
                            ->visible(fn (Forms\Get $get): bool => $get('resource_type') === 'form'),
                        
                        Forms\Components\TextInput::make('external_link')
                            ->label('External Link')
                            ->url()
                            ->placeholder('https://example.com')
                            ->helperText('Full URL including https://')
                            ->visible(fn (Forms\Get $get): bool => $get('resource_type') === 'link'),
                    ]),

                Forms\Components\Section::make('Display Settings')
                    ->schema([
                        Forms\Components\TextInput::make('sort_order')
                            ->label('Display Order')
                            ->numeric()
                            ->default(0)
                            ->helperText('Lower numbers appear first'),
                        
                        Forms\Components\Toggle::make('is_active')
                            ->label('Active Resource')
                            ->default(true),
                    ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->label('Resource')
                    ->searchable()
                    ->sortable(),
                
                Tables\Columns\TextColumn::make('resource_type')
                    ->label('Type')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'page' => 'primary',
                        'form' => 'success',
                        'link' => 'warning',
                        'info' => 'info',
                        default => 'gray',
                    }),
                
                Tables\Columns\TextColumn::make('content')
                    ->label('Content')
                    ->limit(100)
                    ->html()
                    ->visible(fn (): bool => true)
                    ->toggleable(),
                
                Tables\Columns\IconColumn::make('file_path')
                    ->label('File')
                    ->boolean()
                    ->trueIcon('heroicon-o-document')
                    ->falseIcon('heroicon-o-x-mark'),
                
                Tables\Columns\IconColumn::make('external_link')
                    ->label('Link')
                    ->boolean()
                    ->trueIcon('heroicon-o-link')
                    ->falseIcon('heroicon-o-x-mark'),
                
                Tables\Columns\IconColumn::make('is_active')
                    ->label('Active')
                    ->boolean()
                    ->trueIcon('heroicon-o-check-circle')
                    ->falseIcon('heroicon-o-x-circle'),
                
                Tables\Columns\TextColumn::make('sort_order')
                    ->label('Order')
                    ->sortable(),
                
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Last Updated')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\TernaryFilter::make('is_active')
                    ->label('Active Status'),
                Tables\Filters\SelectFilter::make('resource_type')
                    ->label('Resource Type')
                    ->options([
                        'page' => 'Information Page',
                        'form' => 'Downloadable Form',
                        'link' => 'External Link',
                        'info' => 'General Information',
                    ]),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('sort_order')
            ->reorderable('sort_order');
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPatients::route('/'),
            'create' => Pages\CreatePatient::route('/create'),
            'edit' => Pages\EditPatient::route('/{record}/edit'),
        ];
    }
}
