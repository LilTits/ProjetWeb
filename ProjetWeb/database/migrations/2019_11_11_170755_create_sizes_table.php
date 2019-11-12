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
        DB::table('sizes')->insert([
            ['size_id' => 1,'name' => 'Tout Taille', 'tag' => 'tt'],
            ['size_id' => 2,'name' => 'Petit', 'tag' => 's'],
            ['size_id' => 3,'name' => 'Moyen', 'tag' => 'm'],
            ['size_id' => 4,'name' => 'Large', 'tag' => 'l'],
            ['size_id' => 5,'name' => 'Extra Large', 'tag' => 'xl'],
            ['size_id' => 6,'name' => 'Double Extra Large', 'tag' => 'xxl'],
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
