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
            $table->string('full_name');
            $table->integer('gender');
            $table->string('address');
            $table->string('avatar')->nullable();
            $table->string('email')->unique();
            $table->string('DOB');
            $table->string('phone');
            $table->integer('point')->unsigned()->default(0);
            $table->integer('role')->unsigned();
            $table->foreign('role')->references('id')->on('roles');
            $table->rememberToken();
            $table->timestamps();
            $table->integer('status')->default(1);       // 1. Đang kích hoạt | 0. Đã khoá
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
