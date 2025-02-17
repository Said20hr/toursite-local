<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

class CreateGeneralSettings extends SettingsMigration
{
    public function up(): void
    {

        $this->migrator->add('general-settings.title', '');
        $this->migrator->add('general-settings.description', '');
        $this->migrator->add('general-settings.keywords', '');
        $this->migrator->add('general-settings.author', '');
        $this->migrator->add('general-settings.facebook', 'https://www.facebook.com/');
        $this->migrator->add('general-settings.instagram', 'https://www.instagram.com/');
        $this->migrator->add('general-settings.owner_facebook', 'https://www.facebook.com/');
        $this->migrator->add('general-settings.owner_instagram', 'https://www.instagram.com/');
        $this->migrator->add('general-settings.owner_email', 'example@example.com');
        $this->migrator->add('general-settings.owner_phone', '+1234567890');
        $this->migrator->add('general-settings.video', '');

    }
}
