<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->string('permission')->default('Narys');
            $table->string('name')->unique();
            $table->string('full_name')->nullable();
            $table->string('email')->unique();
            $table->string('phone_number')->default('+3706');
            $table->string('sex')->default('Nenurodyta');
            $table->string('birthday')->default('Nenurodyta');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('avatar')->default('user.jpg');
            $table->string('password');
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
