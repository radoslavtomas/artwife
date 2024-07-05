<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EventResource\Pages;
use App\Filament\Resources\EventResource\RelationManagers;
use App\Models\Edition;
use App\Models\Event;
use App\Models\Language;
use App\Models\Status;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class EventResource extends Resource
{
    protected static ?string $model = Event::class;
    private static string $path = '';

    protected static ?string $navigationIcon = 'heroicon-o-star';

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
                    Forms\Components\Repeater::make('type')->schema([
                        Forms\Components\Select::make('language')
                            ->options(Language::all()->pluck('name', 'name')),
                        Forms\Components\TextInput::make('type'),
                    ]),
//                    Forms\Components\Checkbox::make('featured'),
                ])->columns(1),
                Forms\Components\Fieldset::make('When and where')->schema([
                    Forms\Components\DatePicker::make('date_start')
                        ->required(),
                    Forms\Components\TimePicker::make('time_start')
                        ->required(),
//                    Forms\Components\DatePicker::make('date_end'),
//                    Forms\Components\TimePicker::make('time_end'),
                    Forms\Components\Repeater::make('place')->schema([
                        Forms\Components\Select::make('language')
                            ->options(Language::all()->pluck('name', 'name')),
                        Forms\Components\TextInput::make('place'),
                    ]),
                ])->columns(1),
                Forms\Components\Fieldset::make('Main')->schema([
                    Forms\Components\FileUpload::make('image')
                        ->image()
                        ->directory('events')
                        ->getUploadedFileNameForStorageUsing(
                            function (TemporaryUploadedFile $file): string {
                                $filename = explode('.', $file->getClientOriginalName())[0];
                                return Str::slug($filename).'.'.$file->getClientOriginalExtension();
                            }),
                    Forms\Components\Repeater::make('title')->schema([
                        Forms\Components\Select::make('language')
                            ->options(Language::all()->pluck('name', 'name'))
                            ->required(),
                        Forms\Components\TextInput::make('title')->required(),
                    ]),
                    Forms\Components\Repeater::make('teaser')->schema([
                        Forms\Components\Select::make('language')
                            ->options(Language::all()->pluck('name', 'name'))
                            ->required(),
                        Forms\Components\TextInput::make('teaser')->required(),
                    ]),
                    Forms\Components\Repeater::make('body')->schema([
                        Forms\Components\Select::make('language')
                            ->options(Language::all()->pluck('name', 'name'))
                            ->required(),
                        Forms\Components\RichEditor::make('body')->required(),
                    ]),
                    Forms\Components\TextInput::make('slug')
                        ->required()
                        ->hiddenOn(Pages\CreateEvent::class),
                ])->columns(1),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('edition.year')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('title.0.title')->label('Title')
                ->sortable()
                ->searchable(),
                Tables\Columns\TextColumn::make('date_start')->date('d.m.Y')
                ->sortable()
                ->searchable(),
                Tables\Columns\TextColumn::make('time_start')->date('H:i'),
                Tables\Columns\SelectColumn::make('status_id')
                    ->label('Status')
                    ->options(Status::all()->pluck('name', 'id')),
            ])->defaultSort('date_start', 'desc')
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
            'index' => Pages\ListEvents::route('/'),
            'create' => Pages\CreateEvent::route('/create'),
            'edit' => Pages\EditEvent::route('/{record}/edit'),
        ];
    }
}
