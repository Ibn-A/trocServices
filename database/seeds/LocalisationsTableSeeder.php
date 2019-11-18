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
                'ville'=>'Strasbourg'
            ]
        );

        App\Localisation::create(
            [
                'ville'=>'lingolsheim'
            ]
        );

        App\Localisation::create(
            [
                'ville'=>'Illkirch-Graffenstaden'
            ]
        );
    }
}
