<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeoTranslationsTable extends Migration
{

    public function up()
    {
        Schema::create('seo_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('home');
            $table->string('about');
            $table->string('services');
            $table->string('projects');
            $table->string('blogs');
            $table->string('contact');
            $table->string('meta');
            $table->string('desc');
            $table->integer('seo_id')->unsigned();
            $table->string('locale')->index();
            $table->foreign('seo_id')->references('id')->on('seos')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('seo_translations');
    }
}
