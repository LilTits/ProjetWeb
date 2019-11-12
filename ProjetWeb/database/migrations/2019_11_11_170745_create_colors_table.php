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
            $table->increments('color_id');
            $table->string('name');
            $table->timestamps();
            $table->softDeletes();
        });

        // Default Colors
        DB::table('colors')->insert([
            ['name' => 'Blanc'],
            ['name' => 'Noir'],
            ['name' => 'Rouge'],
            ['name' => 'Bleu'],
            ['name' => 'Orange'],
            ['name' => 'Vert'],
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
