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
                'commune'=>'Strasbourg'
            ]
        );

        App\Localisation::create(
            [
                'commune'=>'lingolsheim'
            ]
        );

        App\Localisation::create(
            [
                'commune'=>'Illkirch-Graffenstaden'
            ]
        );
    }
}
