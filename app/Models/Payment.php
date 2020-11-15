<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $guarded = [];

    public function order()
    {
        return $this->belongsTo(Order::class,'order_id','id');
    }

    public function merchant()
    {
        return $this->belongsTo(Merchant::class);
    }

}
