<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('summary');
            $table->longText('content');
            $table->text('images');
            $table->integer('hot');
            $table->unsignedInteger('category_news_id');
            $table->foreign('category_news_id')->references('id')->on('categories_news');
            $table->timestamps();
            $table->integer('views')->unsigned()->default(0);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('NewsTableSeeder');
    }
}
