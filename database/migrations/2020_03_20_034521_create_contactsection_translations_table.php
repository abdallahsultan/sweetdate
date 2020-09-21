<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsectionTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactsection_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->integer('ccontactsection_id')->unsigned();
            $table->string('locale')->index();
            $table->foreign('ccontactsection_id')->references('id')->on('contactsections')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contactsection_translations');
    }
}
