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
            ['id' => 1,'image_path' => 'img/therock.jpg'],
            ['id' => 2,'image_path' => 'img/therock.jpg'],
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
