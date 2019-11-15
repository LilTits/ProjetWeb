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
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->softDeletes();
        });

        // Default Colors
        DB::table('colors')->insert([
            ['id' => 1,'name' => 'Blanc'],
            ['id' => 2,'name' => 'Noir'],
            ['id' => 3,'name' => 'Rouge'],
            ['id' => 4,'name' => 'Bleu'],
            ['id' => 5,'name' => 'Orange'],
            ['id' => 6,'name' => 'Vert'],
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
