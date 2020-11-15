<?php

if (! function_exists('setting')) {
    function setting($key = 'app_name')
    {
        return \App\Models\Setting::getAllSettings()->where('key', $key)->first()->value;
    }
}

if (! function_exists('is_menu_selected')) {
    function is_menu_selected(string $route_name): string
    {
        return Route::is($route_name) ? 'active' : '';
    }
}

if (! function_exists('upload_url')) {
    function upload_url($path)
    {
        return \Storage::disk('upload')->url($path);
    }
}
