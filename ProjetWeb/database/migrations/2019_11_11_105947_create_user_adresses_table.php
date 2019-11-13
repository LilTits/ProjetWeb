<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserAdressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_adresses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('adress_id')->unsigned();
            $table->Boolean('is_primary');
            $table->timestamps();
            $table->softDeletes();
           
            //FOREIGN KEY CONSTRAINTS
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('adress_id')->references('id')->on('adresses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_adresses');
    }
}
