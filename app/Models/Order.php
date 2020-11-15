<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Order extends Model
{
    protected $guarded = [];

    public function payment()
    {
        return $this->belongsTo(Payment::class, 'order_id');
    }

    public function district()
    {
        return $this->belongsTo(District::class, 'district_id');
    }

    public function courier()
    {
        return $this->belongsTo(Courier::class, 'courier_id');
    }

    public static function invoiceNo()
    {
        $lastOrder = self::latest()->first();

        $number = 0;

        if ($lastOrder) {
            $number = Str::of($lastOrder->invoice_no)
                ->explode('INV_')->last();
        }
        $number = $number + 1;
        return sprintf("INV_%09d", $number);

    }
}
