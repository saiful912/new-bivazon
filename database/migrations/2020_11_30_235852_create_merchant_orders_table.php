<?php

use App\Enums\OrderStatus;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMerchantOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('merchant_orders', function (Blueprint $table) {
            $table->id();
            $table->string('invoice_no');
            $table->foreignId('user_id');
            $table->enum('status', [OrderStatus::FAILED(), OrderStatus::COMPLETED(), OrderStatus::CONFIRMED(), OrderStatus::PENDING(),
                OrderStatus::ON_HOLD(), OrderStatus::PROCESSING(), OrderStatus::CANCELED()]);
            $table->decimal('total_amount', 11, 2);
            $table->decimal('total_discount')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('merchant_orders');
    }
}
