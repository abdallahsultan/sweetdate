<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{

    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('avatar');
            $table->integer('pcategory_id')->unsigned();
            $table->timestamps();
            $table->foreign('pcategory_id')->references('id')->on('pcategories')->onDelete('cascade');
        });
    }


    public function down()
    {
        Schema::dropIfExists('products');
    }
}
