<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    public $guarded = [];

    protected $casts = [
        'extra' => 'json',
    ];

    public function scopeActive(Builder $query)
    {
        return $query->where('status', '=', 1);
    }
}
