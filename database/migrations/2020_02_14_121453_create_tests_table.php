<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestsTable extends Migration
{

    public function up()
    {
        Schema::create('tests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('avatar');
            $table->string('status')->defualt(0);
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('tests');
    }
}
