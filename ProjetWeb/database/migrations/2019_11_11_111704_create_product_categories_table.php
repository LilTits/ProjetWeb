<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description');
            $table->timestamps();
            $table->softDeletes();
        });

        // Default  Product Categories
        DB::table('product_categories')->insert([
            ['id' => 1,'name' => 'unsorted', 'description' => 'unsorted products, needs/should be storted'],
            ['id' => 2,'name' => 'Vêtements', 'description' => 'les substance douce pour votre corps'],
            ['id' => 3,'name' => 'Bibelots', 'description' => 'trucs et choses aléatoires'],
            ['id' => 4,'name' => 'Services', 'description' => 'les serivices du bde'],
            ['id' => 5,'name' => 'Tasses et Tapis', 'description' => 'Pourquoi ne veux tu pas une belle tasse et un tapis pour verser tes boissons dessus et dedans'],
            ['id' => 6,'name' => 'Apple a la Titou', 'description' => 'contrefaçon de produits Apple gracieusment offert par Titouan'],
            ['id' => 7,'name' => 'Les Poules de Matheo', 'description' => 'les meilleurs poulets de toute la Terre, vendus exclusivement par matheo'],
            ['id' => 8,'name' => 'Pantoufle et Chaussettes', 'description' => "pour les connaisseurs de la délicatesse qu'est le pied humain - Simon 2019"],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_categories');
    }
}
