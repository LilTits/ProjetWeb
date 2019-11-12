<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('password');
            $table->unsignedDecimal('wallet_amount', 15, 2)->default(0);
            $table->integer('center_id')->unsigned()->nullable();
            $table->integer('image_profile')->unsigned()->default(1);
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();


            //FOREIGN KEY CONSTRAINTS
            $table->foreign('center_id')->references('center_id')->on('centers')->onDelete('cascade');
            $table->foreign('image_profile')->references('image_id')->on('images')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
