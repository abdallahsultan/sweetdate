<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSliderTranslationsTable extends Migration
{

    public function up()
    {
        Schema::create('slider_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->longText('body');
            $table->integer('slider_id')->unsigned();
            $table->string('locale')->index();
            $table->foreign('slider_id')->references('id')->on('sliders')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('slider_translations');
    }
}
