<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServiceResource\Pages;
use App\Models\Service;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Illuminate\Support\Str;


class ServiceResource extends Resource
{
    protected static ?string $model = Service::class;
    protected static ?string $navigationGroup = 'Services';

    protected static ?string $navigationIcon = 'heroicon-o-briefcase';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->required()
                    ->live(onBlur: true)
                    ->maxLength(255)
                    ->afterStateUpdated(fn ($operation, $state, Set $set) => $operation === 'create' ? $set('slug', Str::slug($state)) : null),
                TextInput::make('slug')
                    ->label('Slug')
                    ->disabled()
                    ->dehydrated()
                    ->required()
                    ->maxLength(255)
                    ->unique(Service::class, 'slug', ignoreRecord: true),
                TextInput::make('Subtitle')
                    ->columnSpanFull()
                    ->required(),
                FileUpload::make('image')
                    ->label('Image')
                    ->columnSpanFull()
                    ->required(),
                Textarea::make('excerpt')
                    ->label('Excerpt')
                    ->columnSpanFull()
                    ->required(),

                Card::make([
                    TextInput::make('title_description_1')
                        ->label('Title Description 1'),
                    RichEditor::make('description_1')
                        ->label('Description 1'),
                ]),

                Card::make([
                    TextInput::make('title_description_2')
                        ->label('Title Description 2'),
                    RichEditor::make('description_2')
                        ->label('Description 2'),
                ]),

                Card::make([
                    TextInput::make('title_description_3')
                        ->label('Title Description 3'),
                    RichEditor::make('description_3')
                        ->label('Description 3'),
                ]),

                FileUpload::make('gallery')
                    ->label('Gallery')
                    ->multiple()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([

                Tables\Columns\ImageColumn::make('image')
                    ->label('Image')
                    ->size(80)
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('title')
                    ->sortable()
                    ->limit(50)
                    ->searchable(),
                Tables\Columns\TextColumn::make('title')
                    ->sortable()
                    ->limit(50)
                    ->searchable(),
                Tables\Columns\TextColumn::make('excerpt')
                    ->sortable()
                    ->searchable(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->filters([
                //
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
            'index' => Pages\ListServices::route('/'),
            'create' => Pages\CreateService::route('/create'),
            'edit' => Pages\EditService::route('/{record}/edit'),
        ];
    }
}
