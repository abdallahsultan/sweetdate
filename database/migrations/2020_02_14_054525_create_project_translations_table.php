<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectTranslationsTable extends Migration
{

    public function up()
    {
        Schema::create('project_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->longText('body');
            $table->integer('project_id')->unsigned();
            $table->string('locale')->index();
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
        });
    }


    public function down()
    {
        Schema::dropIfExists('project_translations');
    }
}
