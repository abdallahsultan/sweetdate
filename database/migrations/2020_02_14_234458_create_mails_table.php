<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMailsTable extends Migration
{

    public function up()
    {
        Schema::create('mails', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->boolean('status')->default(0);
            $table->longText('body');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('mails');
    }
}
