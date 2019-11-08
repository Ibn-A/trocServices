<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Categorie::create(
            [
                'nomCategorie'=>'Bien être'
            ]
        );

        App\Categorie::create(
            [
                'nomCategorie'=>'Maison'
            ]
        );

        App\Categorie::create(
            [
                'nomCategorie'=>'Aide à la personne'
            ]
        );

        App\Categorie::create(
            [
                'nomCategorie'=>'Cours'
            ]
        );

        App\Categorie::create(
            [
                'nomCategorie'=>'Bricolage'
            ]
        );
    }
}
