<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description');
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->boolean('is_recurrent')->default(false);
            $table->boolean('has_entry_fee')->default(false);
            $table->unsignedDecimal('price', 15, 2);
            $table->integer('max_participants')->unsigned();
            $table->boolean('is_flagged')->default(false);
            $table->integer('ecategory_id')->unsigned()->default(1);
            $table->integer('creator')->unsigned();
            $table->string('event_image')->default('therock.jpg');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->softDeletes();

            //FOREIGN KEY CONSTRAINTS
            $table->foreign('ecategory_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('creator')->references('id')->on('users')->onDelete('cascade');
            // $table->foreign('image_cover')->references('id')->on('images')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
