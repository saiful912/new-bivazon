<?php

use App\Enums\ShopType;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMerchantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('merchants', function (Blueprint $table) {
            $table->id();
            $table->string('shop_name')->nullable();
            $table->enum('shop_type', [ShopType::RETAIL(), ShopType::WHOLESALE()]);
            $table->string('shop_banner')->nullable();
            $table->foreignId('category_id');
            $table->decimal('current_balance')->default(00);
            $table->string('city')->nullable();
            $table->decimal('commission')->nullable();
            $table->string('address')->nullable();
            $table->longText('extra')->nullable();
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
        Schema::dropIfExists('merchants');
    }
}
