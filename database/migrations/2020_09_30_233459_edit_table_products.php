<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EditTableProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
           
            $table->biginteger('pcategory_id')->unsigned()->after('avatar');
        
        });
    }


    public function down()
    {
        Schema::dropIfExists('products');
    }
}
