<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PageResource\Pages;
use App\Filament\Resources\PageResource\RelationManagers;
use App\Models\Language;
use App\Models\Page;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PageResource extends Resource
{
    protected static ?string $model = Page::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Content';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Fieldset::make('Settings')->schema([
                    Forms\Components\TextInput::make('page_key')->required(),
                ]),

                Forms\Components\Fieldset::make('Main')
                    ->schema([
                        Forms\Components\Repeater::make('name')
                            ->schema([
                                Forms\Components\Select::make('language')
                                    ->options(Language::all()->pluck('name', 'name'))
                                    ->required(),
                                Forms\Components\TextInput::make('name')->required(),
                            ])->columns(1),
                        Forms\Components\Repeater::make('body')
                            ->schema([
                                Forms\Components\Select::make('language')
                                    ->options(Language::all()->pluck('name', 'name'))
                                    ->required(),
                                Forms\Components\RichEditor::make('body')->required(),
                            ])
                    ])->columns(1),
            ])->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('page_key'),
                Tables\Columns\TextColumn::make('name.0.name')->label('Name'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListPages::route('/'),
            'create' => Pages\CreatePage::route('/create'),
            'edit' => Pages\EditPage::route('/{record}/edit'),
        ];
    }
}
