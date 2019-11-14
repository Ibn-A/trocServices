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
                'objet_demande'=>'recherche massage thailandais',
                'contenu_demande'=>'Je débute un entraienement intensif en boxe thai et,
                 je souhaiterais avoir  des massage thailandais fait par un spécialiste pour cet été.',
                'user_id'=> 1,
                'service_id'=> 1,
                'localisation_id'=> 1
            ]
        );
    }
}
