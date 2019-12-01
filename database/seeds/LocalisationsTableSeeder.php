<?php

use Illuminate\Database\Seeder;

class LocalisationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Localisation::create(
            [
                'name' => 'Île-de-France',
                'code' => 11,
                
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );

        App\Localisation::create(
            [
                'name' => 'Centre-Val de Loire',
                'code' => 24,
               
                'created_at' => now(),
                'updated_at' => now(),  
            ]
        );

        App\Localisation::create(
            [
                'name' => 'Bourgogne-Franche-Comté',
                'code' => 27,
                
                'created_at' => now(),
                'updated_at' => now(),
                
            ]
        );

        App\Localisation::create(
            [
                'name' => 'Hauts-de-France',
                'code' => 32,
                
                'created_at' => now(),
                'updated_at' => now(),  
            ]
        );

        App\Localisation::create(
            [
                'name' => 'Grand Est',
                'code' => 44,
                
                'created_at' => now(),
                'updated_at' => now(),   
            ]
        );

        App\Localisation::create(
            [
                'name' => 'Pays de la Loire',
                'code' => 52,
               
                'created_at' => now(),
                'updated_at' => now(),
                
            ]
        );

        App\Localisation::create(
            [
                'name' => 'Bretagne',
                'code' => 53,
                
                'created_at' => now(),
                'updated_at' => now(),
                
            ]
        );

        App\Localisation::create(
            [
                'name' => 'Nouvelle-Aquitaine',
                'code' => 75,
                
                'created_at' => now(),
                'updated_at' => now(),
                
            ]
        );

        App\Localisation::create(
            [
                'name' => 'Occitanie',
                'code' => 76,
                
                'created_at' => now(),
                'updated_at' => now(),

            ]
        );

        App\Localisation::create(
            [
                'name' => 'Auvergne-Rhône-Alpes',
                'code' => 84,
                
                'created_at' => now(),
                'updated_at' => now(),
                
            ]
        );

        App\Localisation::create(
            [
                'name' => "Provence-Alpes-Côte d'Azur",
                'code' => 93,
                
                'created_at' => now(),
                'updated_at' => now(),
                
            ]
        );

        App\Localisation::create(
            [
                'name' => 'Corse',
                'code' => 94,
                
                'created_at' => now(),
                'updated_at' => now(),
                
            ]
        );

        App\Localisation::create(
            [
                'name' => 'Normandie',
                'code' => 28,
                
                'created_at' => now(),
                'updated_at' => now(),
                
            ]
        );
    }
}
