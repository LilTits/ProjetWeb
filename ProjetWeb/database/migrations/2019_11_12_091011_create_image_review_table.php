<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImageReviewTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('image_review', function (Blueprint $table) 
        {
            $table->integer('image_id')->unsigned();
            $table->integer('review_id')->unsigned();
        
         //FOREIGN KEY CONSTRAINTS
            $table->foreign('image_id')->references('image_id')->on('iamges')->onDelete('cascade');
            $table->foreign('review_id')->references('review_id')->on('reviews')->onDelete('cascade');
         
        //SETTING THE PRIMARY KEYS
            $table->primary(['image_id','review_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('image_reviews');
    }
}
