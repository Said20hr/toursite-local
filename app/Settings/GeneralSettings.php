<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class GeneralSettings extends Settings
{
    public ?string $description;
    public ?string $keywords;
    public ?string $author;
    public ?string $title;
    public ?string $facebook;
    public ?string $instagram;
    public ?string $owner_facebook;  // Facebook URL
    public ?string $owner_instagram; // Instagram URL
    public ?string $owner_email;     // Email Address
    public ?string $owner_phone;     // Phone Number

    public static function group(): string
    {
        return 'general-settings'; // Assure-toi que cela correspond à ta migration
    }
}
