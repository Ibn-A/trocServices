<?php

use Illuminate\Database\Seeder;

class DemandeServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\DemandeService::create(
            [
                'titre'=>'recherche massage thailandais',
                'texte'=>'Je débute un entraienement intensif en boxe thai et,
                 je souhaiterais bénéficier de séances de massages thailandais fait par un spécialiste pour cet été.',
                'user_id'=> 1,
                'service_id'=> 1,
                'localisation_id'=> 1
            ]
        );
    }
}
