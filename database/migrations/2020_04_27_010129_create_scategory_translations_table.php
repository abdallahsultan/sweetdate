<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScategoryTranslationsTable extends Migration
{

    public function up()
    {
        Schema::create('scategory_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->integer('scategory_id')->unsigned();
            $table->string('locale')->index();
            $table->foreign('scategory_id')->references('id')->on('scategories')->onDelete('cascade');
        });
    }


    public function down()
    {
        Schema::dropIfExists('scategory_translations');
    }
}
