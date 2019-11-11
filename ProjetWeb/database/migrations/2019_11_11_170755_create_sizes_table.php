<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSizesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sizes', function (Blueprint $table) {
            $table->increments('size_id');
            $table->string('name');
            $table->string('tag');
            $table->timestamps();
            $table->softDeletes();
        });

        // Default Sizes
        DB::table('groups')->insert([
            ['name' => 'Tout Taille', 'tag' => 'tt'],
            ['name' => 'Petit', 'tag' => 's'],
            ['name' => 'Moyen', 'tag' => 'm'],
            ['name' => 'Large', 'tag' => 'l'],
            ['name' => 'Extra Large', 'tag' => 'xl'],
            ['name' => 'Double Extra Large', 'tag' => 'xxl'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sizes');
    }
}
