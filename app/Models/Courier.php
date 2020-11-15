<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Courier extends Model
{
    public $guarded = [];

    public function parent()
    {
        return $this->belongsTo(Courier::class, 'parent_id');
    }

    public function district()
    {
        return $this->belongsTo(District::class);
    }
}
