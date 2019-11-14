<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adresses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('zipcode');
            $table->string('street_adress');
            $table->string('city');
            $table->timestamps();
            $table->softDeletes();
        });

        DB::table('adresses')->insert([
            ['id' => 1,'city' => 'Aix-en-Provence', 'zipcode' => '12345', 'street_adress' => '66 temporary road'],
            ['id' => 2,'city' => 'Angoulême', 'zipcode' => '12345', 'street_adress' => '66 temporary road'],
            ['id' => 3,'city' => 'Arras', 'zipcode' => '12345', 'street_adress' => '66 temporary road'],
            ['id' => 4,'city' => 'Bordeaux', 'zipcode' => '12345', 'street_adress' => '66 temporary road'],
            ['id' => 5,'city' => 'Brest', 'zipcode' => '12345', 'street_adress' => '66 temporary road'],
            ['id' => 6,'city' => 'Caen', 'zipcode' => '12345', 'street_adress' => '66 temporary road'],
            ['id' => 7,'city' => 'Châteauroux', 'zipcode' => '12345', 'street_adress' => '66 temporary road'],
            ['id' => 8,'city' => 'Dijon', 'zipcode' => '12345', 'street_adress' => '66 temporary road'],
            ['id' => 9,'city' => 'Grenoble', 'zipcode' => '12345', 'street_adress' => '66 temporary road'],
            ['id' => 10,'city' => 'La Rochelle', 'zipcode' => '12345', 'street_adress' => '66 temporary road'],
            ['id' => 11,'city' => 'Le Mans', 'zipcode' => '12345', 'street_adress' => '66 temporary road'],
            ['id' => 12,'city' => 'Lille', 'zipcode' => '12345', 'street_adress' => '66 temporary road'],
            ['id' => 13,'city' => 'Lyon', 'zipcode' => '12345', 'street_adress' => '66 temporary road'],
            ['id' => 14,'city' => 'Montpellier', 'zipcode' => '12345', 'street_adress' => '66 temporary road'],
            ['id' => 15,'city' => 'Nancy', 'zipcode' => '12345', 'street_adress' => '66 temporary road'],
            ['id' => 16,'city' => 'Nanterre', 'zipcode' => '12345', 'street_adress' => '66 temporary road'],
            ['id' => 17,'city' => 'Nantes', 'zipcode' => '12345', 'street_adress' => '66 temporary road'],
            ['id' => 18,'city' => 'Nice', 'zipcode' => '12345', 'street_adress' => '66 temporary road'],
            ['id' => 19,'city' => 'Orléans', 'zipcode' => '12345', 'street_adress' => '66 temporary road'],
            ['id' => 20,'city' => 'Pau', 'zipcode' => '12345', 'street_adress' => '66 temporary road'],
            ['id' => 21,'city' => 'Reims', 'zipcode' => '12345', 'street_adress' => '66 temporary road'],
            ['id' => 22,'city' => 'Rouen', 'zipcode' => '12345', 'street_adress' => '66 temporary road'],
            ['id' => 23,'city' => 'Saint-Nazaire', 'zipcode' => '12345', 'street_adress' => '66 temporary road'],
            ['id' => 24,'city' => 'Strasbourg', 'zipcode' => '12345', 'street_adress' => '66 temporary road'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adresses');
    }
}
