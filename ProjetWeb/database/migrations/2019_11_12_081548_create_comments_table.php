<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('comment_id');
            $table->string('content');
            $table->boolean('is_flagged');
            $table->integer('image_id')->unsigned();
            $table->integer('event_id')->unsigned();
            $table->integer('author')->unsigned();
            $table->timestamps();
            $table->softDeletes();

            //FOREIGN KEY CONSTRAINTS
            $table->foreign('image_id')->references('image_id')->on('images')->onDelete('cascade');
            $table->foreign('event_id')->references('event_id')->on('events')->onDelete('cascade');
            $table->foreign('author')->references('user_id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}