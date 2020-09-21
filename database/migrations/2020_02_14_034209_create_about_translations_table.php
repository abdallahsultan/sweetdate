<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutTranslationsTable extends Migration
{

    public function up()
    {
        Schema::create('about_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->longText('body');
            $table->text('small_title');
            $table->integer('about_id')->unsigned();
            $table->string('locale')->index();
            $table->foreign('about_id')->references('id')->on('abouts')->onDelete('cascade');
        });
    }


    public function down()
    {
        Schema::dropIfExists('about_translations');
    }
}
