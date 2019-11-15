<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCentersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('centers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('adress_id')->unsigned();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->softDeletes();

            //FOREIGN KEY CONSTRAINTS
            $table->foreign('adress_id')->references('id')->on('adresses')->onDelete('cascade');

        });

        DB::table('centers')->insert([
            ['id' => 1,'name' => 'root_world', 'adress_id' => 1],
            ['id' => 2,'name' => 'Aix-en-Provence', 'adress_id' => 1],
            ['id' => 3,'name' => 'Angoulême', 'adress_id' => 2],
            ['id' => 4,'name' => 'Arras', 'adress_id' => 3],
            ['id' => 5,'name' => 'Bordeaux', 'adress_id' => 4],
            ['id' => 6,'name' => 'Brest', 'adress_id' => 5],
            ['id' => 7,'name' => 'Caen', 'adress_id' => 6],
            ['id' => 8,'name' => 'Châteauroux', 'adress_id' => 7],
            ['id' => 9,'name' => 'Dijon', 'adress_id' => 8],
            ['id' => 10,'name' => 'Grenoble', 'adress_id' => 9],
            ['id' => 11,'name' => 'La Rochelle', 'adress_id' => 10],
            ['id' => 12,'name' => 'Le Mans', 'adress_id' => 11],
            ['id' => 13,'name' => 'Lille', 'adress_id' => 12],
            ['id' => 14,'name' => 'Lyon', 'adress_id' => 13],
            ['id' => 15,'name' => 'Montpellier', 'adress_id' => 14],
            ['id' => 16,'name' => 'Nancy', 'adress_id' => 15],
            ['id' => 17,'name' => 'Nanterre', 'adress_id' => 16],
            ['id' => 18,'name' => 'Nantes', 'adress_id' => 17],
            ['id' => 19,'name' => 'Nice', 'adress_id' => 18],
            ['id' => 20,'name' => 'Orléans', 'adress_id' => 19],
            ['id' => 21,'name' => 'Pau', 'adress_id' => 20],
            ['id' => 22,'name' => 'Reims', 'adress_id' => 21],
            ['id' => 23,'name' => 'Rouen', 'adress_id' => 22],
            ['id' => 24,'name' => 'Saint-Nazaire', 'adress_id' => 23],
            ['id' => 25,'name' => 'Strasbourg', 'adress_id' => 24],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('centers');
    }
}
