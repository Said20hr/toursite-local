<?php

namespace App;

use Illuminate\Support\Facades\Route;

class Router
{
    public static function localizedRoute($locale, $parameters = [])
    {
        $currentRouteName = Route::currentRouteName();
        $routeParameters = array_merge($parameters, ['locale' => $locale]);

        // Check if the current route requires a slug
        if (in_array('slug', Route::current()->parameterNames())) {
            $routeParameters['slug'] = Route::current()->parameter('slug');
        }

        return route($currentRouteName, $routeParameters);
    }
}
