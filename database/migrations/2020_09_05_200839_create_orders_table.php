<?php

use App\Enums\OrderStatus;
use App\Enums\OrderType;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->ipAddress('ip');
            $table->string('merchant_id')->nullable();
            $table->foreignId('customer_id')->nullable();
            $table->string('invoice_no')->unique();
            $table->foreignId('user_id')->nullable();
            $table->string('email')->nullable();
            $table->string('name')->nullable();
            $table->string('phone')->nullable();
            $table->text('address')->nullable();
            $table->foreignId('district_id')->nullable();
            $table->foreignId('courier_id')->nullable();
            $table->string('payment_method');
            $table->timestamp('courier_at')->nullable();
            $table->timestamp('delivery_at')->nullable();
            $table->enum('status', [OrderStatus::FAILED(), OrderStatus::COMPLETED(), OrderStatus::CONFIRMED(), OrderStatus::PENDING(),
                OrderStatus::ON_HOLD(), OrderStatus::PROCESSING(), OrderStatus::CANCELED()]);
            $table->enum('type', [OrderType::RETAIL()])->nullable();
            $table->decimal('total_amount');
            $table->text('note')->nullable();
            $table->decimal('advance_amount');
            $table->decimal('delivery_charge_outside_dhaka')->nullable();
            $table->decimal('delivery_charge_inside_dhaka')->nullable();
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
        Schema::dropIfExists('orders');
    }
}
