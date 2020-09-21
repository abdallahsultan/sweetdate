<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePcategoryTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pcategory_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->integer('pcategory_id')->unsigned();
            $table->string('locale')->index();
            $table->foreign('pcategory_id')->references('id')->on('pcategories')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pcategory_translations');
    }
}
