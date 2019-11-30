<?php

use Illuminate\Database\Seeder;

class OffreServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\OffreService::create(
            [
                'titre'=>'propose 1h de massage thailandais',
                'texte'=>'Expert en massage thailandais,
                 je peux vous offrir des services de massages thai pour vous détentre et relaxer vos muscles et vos articulations.',
                'user_id'=> 1,
                'service_id'=> 1,
                'localisation_id'=> 1
            ]
        );
    }
}
