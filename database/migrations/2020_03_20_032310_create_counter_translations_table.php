<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCounterTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('counter_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->integer('counter_id')->unsigned();
            $table->string('locale')->index();
            $table->foreign('counter_id')->references('id')->on('counters')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('counter_translations');
    }
}
