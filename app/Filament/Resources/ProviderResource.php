<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProviderResource\Pages;
use App\Models\Provider;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProviderResource extends Resource
{
    protected static ?string $model = Provider::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    protected static ?string $navigationGroup = 'Clinic Management';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Provider Information')
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->label('Full Name')
                            ->required()
                            ->placeholder('Dr. Jane Smith, MD')
                            ->maxLength(255),
                        
                        Forms\Components\TextInput::make('title')
                            ->label('Professional Title')
                            ->required()
                            ->placeholder('Board-certified Family Physician')
                            ->maxLength(255),
                        
                        Forms\Components\TextInput::make('specialty')
                            ->label('Specialty')
                            ->required()
                            ->placeholder('Family Medicine')
                            ->maxLength(255),
                        
                        Forms\Components\FileUpload::make('photo')
                            ->label('Profile Photo')
                            ->image()
                            ->imageEditor()
                            ->directory('providers')
                            ->visibility('public'),
                    ])->columns(2),

                Forms\Components\Section::make('Biography')
                    ->schema([
                        Forms\Components\RichEditor::make('bio')
                            ->label('Biography')
                            ->columnSpanFull()
                            ->toolbarButtons([
                                'bold',
                                'italic',
                                'link',
                                'bulletList',
                                'orderedList',
                            ]),
                    ]),

                Forms\Components\Section::make('Contact Information')
                    ->schema([
                        Forms\Components\TextInput::make('email')
                            ->label('Email')
                            ->email()
                            ->maxLength(255),
                        
                        Forms\Components\TextInput::make('phone')
                            ->label('Phone')
                            ->tel()
                            ->maxLength(255),
                    ])->columns(2),

                Forms\Components\Section::make('Availability')
                    ->schema([
                        Forms\Components\Toggle::make('accepts_telehealth')
                            ->label('Accepts Telehealth')
                            ->default(true),
                        
                        Forms\Components\Toggle::make('accepts_new_patients')
                            ->label('Accepts New Patients')
                            ->default(true),
                        
                        Forms\Components\Toggle::make('is_active')
                            ->label('Active Provider')
                            ->default(true),
                    ])->columns(3),

                Forms\Components\Section::make('Display Settings')
                    ->schema([
                        Forms\Components\TextInput::make('sort_order')
                            ->label('Display Order')
                            ->numeric()
                            ->default(0)
                            ->helperText('Lower numbers appear first'),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('photo')
                    ->label('Photo')
                    ->circular()
                    ->size(50),
                
                Tables\Columns\TextColumn::make('name')
                    ->label('Name')
                    ->searchable()
                    ->sortable(),
                
                Tables\Columns\TextColumn::make('title')
                    ->label('Title')
                    ->searchable()
                    ->limit(50),
                
                Tables\Columns\TextColumn::make('specialty')
                    ->label('Specialty')
                    ->searchable(),
                
                Tables\Columns\IconColumn::make('accepts_telehealth')
                    ->label('Telehealth')
                    ->boolean()
                    ->trueIcon('heroicon-o-video-camera')
                    ->falseIcon('heroicon-o-x-mark'),
                
                Tables\Columns\IconColumn::make('accepts_new_patients')
                    ->label('New Patients')
                    ->boolean()
                    ->trueIcon('heroicon-o-user-plus')
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
                Tables\Filters\TernaryFilter::make('accepts_telehealth')
                    ->label('Telehealth Available'),
                Tables\Filters\TernaryFilter::make('accepts_new_patients')
                    ->label('Accepts New Patients'),
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
            'index' => Pages\ListProviders::route('/'),
            'create' => Pages\CreateProvider::route('/create'),
            'edit' => Pages\EditProvider::route('/{record}/edit'),
        ];
    }
}
