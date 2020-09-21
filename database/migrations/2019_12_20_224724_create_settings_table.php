<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{

    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('logo')->default('logo.png');
            $table->string('logo_small')->default('logo2.png');
            $table->string('itphone');
            $table->string('itemail');
            $table->string('mphone');
            $table->string('memail');
            $table->string('dphone');
            $table->string('demail');
            $table->string('name')->default('RESIDENCE');
            $table->string('favicon')->default('logo.png');
            $table->longText('address');
            $table->longText('meta');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
