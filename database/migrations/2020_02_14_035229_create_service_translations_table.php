<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceTranslationsTable extends Migration
{

    public function up()
    {
        Schema::create('service_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->longText('body');
            $table->integer('service_id')->unsigned();
            $table->string('locale')->index();
            $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade');
        });
    }


    public function down()
    {
        Schema::dropIfExists('service_translations');
    }
}
