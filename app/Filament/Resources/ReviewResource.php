<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ReviewResource\Pages;
use App\Models\Edition;
use App\Models\Review;
use App\Models\Status;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ReviewResource extends Resource
{
    protected static ?string $model = Review::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    protected static ?string $navigationGroup = 'Content';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Fieldset::make('Settings')->schema([
                    Forms\Components\Select::make('edition_id')
                        ->label('Edition')
                        ->options(Edition::all()->pluck('year', 'id'))
                        ->required(),
                    Forms\Components\Select::make('status_id')
                        ->label('Status')
                        ->options(Status::all()->pluck('name', 'id'))
                        ->required(),
                ])->columns(1),
                Forms\Components\Fieldset::make('Main')->schema([
                    Forms\Components\TextInput::make('title')->required(),
                    Forms\Components\TextInput::make('slug')
                        ->required()
                        ->hiddenOn(Pages\CreateReview::class),
                    Forms\Components\TextInput::make('source')->required(),
                    Forms\Components\TextInput::make('source_link'),
                    Forms\Components\TextInput::make('author')->required(),
                    Forms\Components\TextInput::make('teaser')->required(),
                    Forms\Components\RichEditor::make('text')->required(),

                ])->columns(1),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('edition.year')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('source'),
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\SelectColumn::make('status_id')
                    ->label('Status')
                    ->options(Status::all()->pluck('name', 'id')),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('year')
                    ->relationship('edition', 'year')
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
            'index' => Pages\ListReviews::route('/'),
            'create' => Pages\CreateReview::route('/create'),
            'edit' => Pages\EditReview::route('/{record}/edit'),
        ];
    }
}
