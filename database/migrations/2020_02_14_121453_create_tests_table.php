<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestsTable extends Migration
{
    // Not make migrate but edit from database directly

    public function up()
    {
        Schema::create('tests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('avatar');
            $table->string('services')->default(0);
            $table->string('waiting_time')->default(0);
            $table->string('food_srevice')->default(0);
            $table->string('team')->default(0);
            $table->string('sanitization')->default(0);
            $table->string('phone');
            $table->string('status')->defualt(0);
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('tests');
    }
}
