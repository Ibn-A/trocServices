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
                'slug' => 'ile_de_france',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );

        App\Localisation::create(
            [
                'name' => 'Centre-Val de Loire',
                'code' => 24,
                'slug' => 'centre',
                'created_at' => now(),
                'updated_at' => now(),  
            ]
        );

        App\Localisation::create(
            [
                'name' => 'Bourgogne-Franche-Comté',
                'code' => 27,
                'slug' => 'bourgogne',
                'created_at' => now(),
                'updated_at' => now(),
                
            ]
        );

        App\Localisation::create(
            [
                'name' => 'Hauts-de-France',
                'code' => 32,
                'slug' => 'hauts_de_france',
                'created_at' => now(),
                'updated_at' => now(),  
            ]
        );

        App\Localisation::create(
            [
                'name' => 'Grand Est',
                'code' => 44,
                'slug' => 'grand_est',
                'created_at' => now(),
                'updated_at' => now(),   
            ]
        );

        App\Localisation::create(
            [
                'name' => 'Pays de la Loire',
                'code' => 52,
                'slug' => 'pays_de_la_loire',
                'created_at' => now(),
                'updated_at' => now(),
                
            ]
        );

        App\Localisation::create(
            [
                'name' => 'Bretagne',
                'code' => 53,
                'slug' => 'bretagne',
                'created_at' => now(),
                'updated_at' => now(),
                
            ]
        );

        App\Localisation::create(
            [
                'name' => 'Nouvelle-Aquitaine',
                'code' => 75,
                'slug' => 'aquitaine',
                'created_at' => now(),
                'updated_at' => now(),
                
            ]
        );

        App\Localisation::create(
            [
                'name' => 'Occitanie',
                'code' => 76,
                'slug' => 'occitanie',
                'created_at' => now(),
                'updated_at' => now(),

            ]
        );

        App\Localisation::create(
            [
                'name' => 'Auvergne-Rhône-Alpes',
                'code' => 84,
                'slug' => 'auvergne',
                'created_at' => now(),
                'updated_at' => now(),
                
            ]
        );

        App\Localisation::create(
            [
                'name' => "Provence-Alpes-Côte d'Azur",
                'code' => 93,
                'slug' => 'provence',
                'created_at' => now(),
                'updated_at' => now(),
                
            ]
        );

        App\Localisation::create(
            [
                'name' => 'Corse',
                'code' => 94,
                'slug' => 'corse',
                'created_at' => now(),
                'updated_at' => now(),
                
            ]
        );

        App\Localisation::create(
            [
                'name' => 'Normandie',
                'code' => 28,
                'slug' => 'normandie',
                'created_at' => now(),
                'updated_at' => now(),
                
            ]
        );
    }
}
