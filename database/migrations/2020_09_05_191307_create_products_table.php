<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('slug')->unique();
            $table->longText('short_description')->nullable();
            $table->longText('long_description')->nullable();
            $table->decimal('price', 22)->nullable();
            $table->decimal('discount')->nullable();
            $table->json('images')->nullable();
            $table->json('attribute')->nullable();
            $table->boolean('status')->nullable();
            $table->boolean('is_hot')->nullable();
            $table->string('sku');
            $table->string('type')->nullable();
            $table->string('code')->nullable();
            $table->boolean('special')->default(0);
            $table->foreignId('category_id')->constrained()->cascadeOnUpdate()->onDelete('restrict');
            $table->foreignId('user_id')->constrained()->cascadeOnUpdate()->onDelete('restrict');
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
        Schema::dropIfExists('products');
    }
}
