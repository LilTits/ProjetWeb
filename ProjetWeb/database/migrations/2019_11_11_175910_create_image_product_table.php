<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImageProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('image_product', function (Blueprint $table) 
        {
            $table->integer('image_id')->unsigned();
            $table->integer('product_id')->unsigned();
        
         //FOREIGN KEY CONSTRAINTS
            $table->foreign('image_id')->references('id')->on('iamges')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
         
        //SETTING THE PRIMARY KEYS
            $table->primary(['image_id','product_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('image_product');
    }
}
