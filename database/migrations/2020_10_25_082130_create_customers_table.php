<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username');
            $table->string('password');
            $table->string('full_name')->nullable();
            $table->integer('gender')->nullable();
            $table->string('address')->nullable();
            $table->string('avatar')->nullable();
            $table->string('email')->unique();
            $table->string('DOB')->nullable();
            $table->string('phone')->nullable();
            $table->integer('point')->unsigned()->default(0);
            $table->rememberToken();
            $table->timestamps();
            $table->integer('status')->nullable()->default(1);       // 1. Đang kích hoạt | 0. Đã khoá
            $table->string('api_token', 60)
                ->unique()
                ->nullable()
                ->default(null);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
