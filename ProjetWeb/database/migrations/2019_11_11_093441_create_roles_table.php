<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('role_id');
            $table->string('slug');
            $table->string('name');
            $table->string('description');
            $table->timestamps();
            $table->softDeletes();
            
        });

        // Default roles
        DB::table('roles')->insert([
            ['role_id' => 1,'slug' => 'role_user_default', 'name' => 'User', 'description' => 'The default user with limited to no permissions'],
            ['role_id' => 2,'slug' => 'role_member_cesi', 'name' => 'Cesi', 'description' => 'The basic member of the cesi school'],
            ['role_id' => 3,'slug' => 'role_admin', 'name' => 'Admin', 'description' => 'Site administrator'],
            ['role_id' => 4,'slug' => 'role_member_bde', 'name' => 'BDE', 'description' => 'A member of the BDE association of cesi'],
            ['role_id' => 5,'slug' => 'role_staff_cesi', 'name' => 'Personelle', 'description' => 'A staff member of the cesi school'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
