<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BookingResource\Pages;
use App\Models\Booking;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;

class BookingResource extends Resource
{
    protected static ?string $model = Booking::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar-date-range';
    protected static ?string $navigationGroup = 'Services';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                TextInput::make('service_id')
                    ->required(),
                TextInput::make('firstname')
                    ->required(),
                TextInput::make('lastname')
                    ->required(),
                TextInput::make('email')
                    ->email()
                    ->required(),
                TextInput::make('phone')
                    ->required(),
                TextInput::make('address')
                    ->required(),
                TextInput::make('country')
                    ->required(),
                DatePicker::make('check_in_date')
                    ->required(),
                DatePicker::make('check_ou_date')
                    ->required(),
                TextInput::make('adults')
                    ->numeric()
                    ->required(),
                TextInput::make('children')
                    ->numeric()
                    ->required(),
                Textarea::make('additional_information'),
                Select::make('status')
                    ->options([
                        'pending' => 'Pending',
                        'confirmed' => 'Confirmed',
                        'cancelled' => 'Cancelled',
                    ])
                    ->required(),
                Textarea::make('answer'),
                TextInput::make('city')
                    ->required(),
            ]);
    }

    public static function table(Tables\Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('service_id')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('firstname')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('lastname')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('phone')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('address')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('country')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('check_in_date')
                    ->date()
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('check_ou_date')
                    ->date()
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('adults')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('children')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('status')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('city')
                    ->sortable()
                    ->searchable(),
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
            'index' => Pages\ListBookings::route('/'),
            'create' => Pages\CreateBooking::route('/create'),
            'edit' => Pages\EditBooking::route('/{record}/edit'),
        ];
    }
}
