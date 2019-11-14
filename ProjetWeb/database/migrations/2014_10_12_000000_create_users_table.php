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
            $table->integer('center_id')->unsigned();
            $table->integer('role_id')->unsigned()->default(1);
            $table->integer('image_profile')->unsigned()->default(1);
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();


            //FOREIGN KEY CONSTRAINTS
            $table->foreign('center_id')->references('id')->on('centers')->onDelete('cascade');
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
            $table->foreign('image_profile')->references('id')->on('images')->onDelete('cascade');

        });

        DB::table('users')->insert([
            ['id' => 1,'first_name' => 'Student', 'last_name' => 'Root', 'email' => 'student@cesi-root.com', 'password' =>  bcrypt('student123'), 'wallet_amount' => '100000000', 'center_id' => 1, 'role_id' => '2'],
            ['id' => 2,'first_name' => 'Admin', 'last_name' => 'Root', 'email' => 'admin@cesi-root.com', 'password' =>  bcrypt('admin123'), 'wallet_amount' => '100000000', 'center_id' => 1, 'role_id' => '3'],
            ['id' => 3,'first_name' => 'BDE', 'last_name' => 'Root', 'email' => 'bde@cesi-root.com', 'password' =>  bcrypt('bde123'), 'wallet_amount' => '100000000', 'center_id' => 1, 'role_id' => '4'],
            ['id' => 4,'first_name' => 'Cesi', 'last_name' => 'Root', 'email' => 'cesi@cesi-root.com', 'password' =>  bcrypt('cesi123'), 'wallet_amount' => '100000000', 'center_id' => 1, 'role_id' => '5'],
        ]);
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
