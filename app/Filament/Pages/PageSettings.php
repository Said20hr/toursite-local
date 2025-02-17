<?php

namespace App\Filament\Pages;

use App\Settings\GeneralSettings;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Form;
use Filament\Pages\SettingsPage;

class PageSettings extends SettingsPage
{

    protected static string $settings = GeneralSettings::class;
    protected static ?string $navigationGroup = 'Services';
    protected static ?string $navigationIcon = 'heroicon-o-cog-8-tooth';
    protected static ?string $navigationLabel = 'General Settings';
    protected static ?string $title = 'General Settings';

    public function form(Form $form): Form
    {
        $settings = app(GeneralSettings::class);

        return $form
            ->schema([
                Forms\Components\Card::make()
                    ->schema([
                        FileUpload::make('video')
                            ->label('Vidéo')
                            ->columnSpanFull()
                            ->directory('videos')
                            ->imagePreviewHeight('150')
                            ->enableOpen()
                            ->enableDownload()
                            ->nullable()
                            ->acceptedFileTypes(['video/*']),
                        Forms\Components\TextInput::make('title')
                            ->label('Site Title')
                            ->columnSpanFull()
                            ->default($settings->title ?? '')
                            ->required(),

                        Forms\Components\Textarea::make('description')
                            ->label('Site Description')
                            ->columnSpanFull()
                            ->default($settings->description ?? '')
                            ->required(),

                        Forms\Components\TextInput::make('keywords')
                            ->label('Meta Keywords')
                            ->default($settings->keywords ?? '')
                            ->required(),

                        Forms\Components\TextInput::make('author')
                            ->label('Author')
                            ->default($settings->author ?? '')
                            ->required(),

                        Forms\Components\TextInput::make('facebook')
                            ->label('Facebook URL')
                            ->default($settings->facebook ?? '')
                            ->nullable()
                            ->url(),

                        Forms\Components\TextInput::make('instagram')
                            ->label('Instagram URL')
                            ->default($settings->instagram ?? '')
                            ->nullable()
                            ->url(),
                    ])
                    ->columns(2),
                Forms\Components\Card::make()
                    ->schema([
                        Forms\Components\TextInput::make('owner_facebook') // Facebook URL
                        ->label('Facebook URL owner')
                            ->default($settings->owner_facebook ?? '')
                            ->nullable()
                            ->url(),

                        Forms\Components\TextInput::make('owner_instagram') // Instagram URL
                        ->label('Instagram URL owner')
                            ->default($settings->owner_instagram ?? '')
                            ->nullable()
                            ->url(),

                        Forms\Components\TextInput::make('owner_email') // Email
                        ->label('Email Address owner')
                            ->default($settings->owner_email ?? '')
                            ->nullable()
                            ->email(),

                        Forms\Components\TextInput::make('owner_phone') // Phone
                        ->label('Phone Number owner')
                            ->default($settings->owner_phone ?? '')
                            ->nullable()
                            ->tel(), // For phone numbers
                    ])
                    ->columns(2),
            ]);
    }
}
