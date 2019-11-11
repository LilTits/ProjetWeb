<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersAdressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adress_user', function (Blueprint $table) {
            $table->increments('user_adress_id');
            $table->integer('user_id')->unsigned();
            $table->integer('adress_id')->unsigned();
            $table->Boolean('is_primary');
            $table->timestamps();
            $table->softDeletes();
           
            //FOREIGN KEY CONSTRAINTS
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade');
            $table->foreign('adress_id')->references('adress_id')->on('adresses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_adresses');
    }
}
