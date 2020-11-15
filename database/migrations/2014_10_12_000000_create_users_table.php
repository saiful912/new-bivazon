<?php

use App\Enums\UserType;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('full_name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->unique();
            $table->enum('type', [
                UserType::ADMIN(),
                UserType::MERCHANT(),
                UserType::AFFILIATE(),
                UserType::RETAIL(),
            ]);
            $table->boolean('status')->default(false);
            $table->boolean('is_confirmed')->nullable();
            $table->string('image')->nullable();
            $table->foreignId('merchant_id')->nullable();
            $table->foreignId('affiliate_id')->nullable();
            $table->string('password');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
