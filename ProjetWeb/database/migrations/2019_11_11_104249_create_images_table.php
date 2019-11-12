<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image_path');
            $table->Boolean('flagged')->default(false);
            $table->timestamps();
            $table->softDeletes();
        });

        // Default images
        DB::table('images')->insert([
            ['image_id' => 1,'image_path' => 'path/default_user_profile.png'],
            ['image_id' => 2,'image_path' => 'path/default_event_cover.png'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('images');
    }
}
