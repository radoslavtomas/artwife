<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PeopleResource\Pages;
use App\Filament\Resources\PeopleResource\RelationManagers;
use App\Models\Language;
use App\Models\People;
use App\Models\Status;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class PeopleResource extends Resource
{
    protected static ?string $model = People::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';

    protected static ?string $navigationGroup = 'Content';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Fieldset::make('Settings')->schema([
                    Forms\Components\Select::make('status_id')
                        ->label('Status')
                        ->options(Status::all()->pluck('name', 'id'))
                        ->required(),
                    Forms\Components\TextInput::make('order')
                        ->required()
                        ->numeric(),
                    Forms\Components\Checkbox::make('essential'),
                ])->columns(2),
                Forms\Components\Fieldset::make('Main')->schema([
                    Forms\Components\FileUpload::make('avatar')
                        ->image()
                        ->directory('avatars')
                        ->getUploadedFileNameForStorageUsing(
                            function (TemporaryUploadedFile $file): string {
                                $filename = explode('.', $file->getClientOriginalName())[0];
                                return Str::slug($filename).'.'.$file->getClientOriginalExtension();
                            })
                        ->imageResizeMode('contain')
                        ->imageResizeTargetWidth('1200')
                        ->imageResizeUpscale(false),
                    Forms\Components\TextInput::make('first_name')
                        ->required(),
                    Forms\Components\TextInput::make('last_name')
                        ->required(),
                    Forms\Components\Repeater::make('title')->schema([
                        Forms\Components\Select::make('language')
                            ->options(Language::all()->pluck('name', 'name'))
                            ->required(),
                        Forms\Components\TextInput::make('title')->required(),
                    ]),
                    Forms\Components\TextInput::make('phone'),
                ])->columns(1),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('avatar'),
                Tables\Columns\TextColumn::make('full_name'),
                Tables\Columns\TextColumn::make('order'),
                Tables\Columns\SelectColumn::make('status_id')
                    ->label('Status')
                    ->options(Status::all()->pluck('name', 'id')),
                Tables\Columns\ToggleColumn::make('essential'),
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
            'index' => Pages\ListPeople::route('/'),
            'create' => Pages\CreatePeople::route('/create'),
            'edit' => Pages\EditPeople::route('/{record}/edit'),
        ];
    }
}
