<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = ['key', 'value'];

    public static function getSettingsArray()
    {
        return cache()->rememberForever('settings.array', function () {
            return self::getAllSettings()->pluck('value', 'key')->toArray();
        });
    }

    public static function getAllSettings()
    {
        return cache()->rememberForever('settings.all', function () {
            return self::all();
        });
    }

    public static function add($key, $value)
    {
        if (self::has($key)) {
            return self::set($key, $value);
        }

        return self::create(['key' => $key, 'value' => $value]) ? $value : false;
    }

    public static function has($key)
    {
        return (boolean) self::getAllSettings()->where('key', $key)->count();
    }

    public static function set($key, $value)
    {
        if ($setting = self::getAllSettings()->where('key', $key)->first()) {
            return $setting->update([
                'key' => $key,
                'value' => $value,
            ]) ? $value : false;
        }

        return self::add($key, $value);
    }

    public static function updateSettings($data)
    {
        foreach ($data as $key => $value) {
            self::set($key, $value);
        }
    }

    protected static function booted()
    {
        parent::booted();
        self::updated(function () {
            self::flushCache();
        });
        self::created(function () {
            self::flushCache();
        });

        self::deleted(function () {
            self::flushCache();
        });
    }

    public static function flushCache()
    {
        cache()->forget('settings.all');
        cache()->forget('settings.array');
    }

    public function remove($key)
    {
        if (self::has($key)) {
            return self::whereKey($key)->delete();
        }

        return false;
    }
}
