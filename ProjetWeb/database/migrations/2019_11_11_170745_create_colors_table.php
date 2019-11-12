<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateColorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
            $table->softDeletes();
        });

        // Default Colors
        DB::table('colors')->insert([
            ['color_id' => 1,'name' => 'Blanc'],
            ['color_id' => 2,'name' => 'Noir'],
            ['color_id' => 3,'name' => 'Rouge'],
            ['color_id' => 4,'name' => 'Bleu'],
            ['color_id' => 5,'name' => 'Orange'],
            ['color_id' => 6,'name' => 'Vert'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('colors');
    }
}
