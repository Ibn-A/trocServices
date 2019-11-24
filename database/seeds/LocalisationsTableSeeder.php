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
                'ville_service'=>'Strasbourg'
            ]
        );

        App\Localisation::create(
            [
                'ville_service'=>'lingolsheim'
            ]
        );

        App\Localisation::create(
            [
                'ville_service'=>'Illkirch-Graffenstaden'
            ]
        );
    }
}
