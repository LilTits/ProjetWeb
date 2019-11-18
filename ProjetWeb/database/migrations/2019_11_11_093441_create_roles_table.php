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
            $table->increments('id');
            $table->string('slug'); //web-developer
            $table->string('name'); //Web Developer
            $table->string('description');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->softDeletes();
            
        });

        // Default roles
        DB::table('roles')->insert([
            ['id' => 1,'slug' => 'default_user', 'name' => 'Default User', 'description' => 'The default user with limited to no permissions'],
            ['id' => 2,'slug' => 'student_cesi', 'name' => 'Student CESI', 'description' => 'The basic member of the cesi school'],
            ['id' => 3,'slug' => 'admin', 'name' => 'Admin', 'description' => 'Site administrator'],
            ['id' => 4,'slug' => 'member_bde', 'name' => 'Member BDE', 'description' => 'A member of the BDE association of cesi'],
            ['id' => 5,'slug' => 'cesi_staff', 'name' => 'CESI Staff', 'description' => 'A staff member of the cesi school'],
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
