<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add2coulmnProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
           
            $table->string('price')->after('pcategory_id')->nullable();
            $table->string('calory')->after('pcategory_id')->nullable();
        
        });
    }


    public function down()
    {
        Schema::dropIfExists('products');
    }
}
