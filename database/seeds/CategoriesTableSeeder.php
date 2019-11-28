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
                'nomCategorie'=>'Soins et beauté'
            ]
        );

        App\Categorie::create(
            [
                'nomCategorie'=>'Cours particuliers'
            ]
        );

        App\Categorie::create(
            [
                'nomCategorie'=>'Aide ménagère'
            ]
        );

        App\Categorie::create(
            [
                'nomCategorie'=>'Les animaux'
            ]
        );

        App\Categorie::create(
            [
                'nomCategorie'=>'Demenagement'
            ]
        );

        App\Categorie::create(
            [
                'nomCategorie'=>'Travaux et entretien habitat'
            ]
        );
    }
}
