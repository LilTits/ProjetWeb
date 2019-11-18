<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->softDeletes();
        });

        // Default Event Categories
        DB::table('event_categories')->insert([
            ['id' => 1,'name' => 'unsorted', 'description' => 'unsorted events, needs/should be storted'],
            ['id' => 2,'name' => 'Sports', 'description' => 'activités sportives ou liées au sport'],
            ['id' => 3,'name' => 'Extérieure', 'description' => 'événements et activités en plein air'],
            ['id' => 4,'name' => 'Jeux de Société', 'description' => 'jeux de société et jeux de rôle'],
            ['id' => 5,'name' => 'Conférence', 'description' => 'conférence ou présentation par une association ou une entreprise'],
            ['id' => 6,'name' => 'Réunion BDE', 'description' => 'rencontre entre membres du bde'],
            ['id' => 7,'name' => 'Team Building', 'description' => "exercices pour renforcer la confiance et la cohésion de l'équipe"],
            ['id' => 8,'name' => 'LAN/Gaming', 'description' => 'des nerds moites jouant dans la même pièce'],
            ['id' => 9,'name' => 'Compétition', 'description' => 'un compentition qui est complètement juste et équilibré'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event_categories');
    }
}
