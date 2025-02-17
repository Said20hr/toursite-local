<?php

use App\Settings\GeneralSettings;

function setting($key)
{
    return app(GeneralSettings::class)->$key ?? null;
}
