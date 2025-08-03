<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MenuResource\Pages;
use Datlechin\FilamentMenuBuilder\Models\Menu;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class MenuResource extends Resource
{
    protected static ?string $model = Menu::class;

    protected static ?string $navigationIcon = 'heroicon-o-bars-3';

    protected static ?string $navigationGroup = 'Site Management';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Menu Information')
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->label('Menu Name')
                            ->required()
                            ->maxLength(255)
                            ->placeholder('Main Navigation'),
                        
                        Forms\Components\Toggle::make('is_visible')
                            ->label('Menu Visible')
                            ->default(true)
                            ->helperText('Whether this menu should be displayed on the site'),
                    ])->columns(2),

                Forms\Components\Section::make('Menu Locations')
                    ->schema([
                        Forms\Components\CheckboxList::make('locations')
                            ->label('Assign to Locations')
                            ->options([
                                'header' => 'Header Navigation',
                                'footer' => 'Footer Navigation',
                                'mobile' => 'Mobile Menu',
                                'sidebar' => 'Sidebar Menu',
                            ])
                            ->columns(2)
                            ->helperText('Select where this menu should appear on the site'),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Menu Name')
                    ->searchable()
                    ->sortable(),
                
                Tables\Columns\IconColumn::make('is_visible')
                    ->label('Visible')
                    ->boolean()
                    ->trueIcon('heroicon-o-check-circle')
                    ->falseIcon('heroicon-o-x-circle'),
                
                Tables\Columns\TextColumn::make('locations.location')
                    ->label('Locations')
                    ->badge()
                    ->color('primary'),
                
                Tables\Columns\TextColumn::make('menuItems_count')
                    ->label('Menu Items')
                    ->counts('menuItems')
                    ->sortable(),
                
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Last Updated')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\TernaryFilter::make('is_visible')
                    ->label('Visibility'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\Action::make('manage_items')
                    ->label('Manage Items')
                    ->icon('heroicon-o-list-bullet')
                    ->url(fn (Menu $record): string => route('filament.admin.resources.menus.edit', $record))
                    ->openUrlInNewTab(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
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
            'index' => Pages\ListMenus::route('/'),
            'create' => Pages\CreateMenu::route('/create'),
            'edit' => Pages\EditMenu::route('/{record}/edit'),
        ];
    }
}
