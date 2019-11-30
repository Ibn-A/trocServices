<?php

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //population pour Soins et beauté
        App\Service::create(
            [
                'nomService'=>'Massage',
                'categorie_id'=> 1
            ]
        );
        App\Service::create(
            [
                'nomService'=>'Coiffure',
                'categorie_id'=> 1
            ]
        );
        App\Service::create(
            [
                'nomService'=>'Manucure',
                'categorie_id'=> 1
            ]
        );
        App\Service::create(
            [
                'nomService'=>'Autres',
                'categorie_id'=> 1
            ]
        );
        //population pour Cours particuliers
        App\Service::create(
            [
                'nomService'=>'Musique',
                'categorie_id'=> 2    
            ]
        );
        App\Service::create(
            [
                'nomService'=>'Langues',
                'categorie_id'=> 2    
            ]
        );
        App\Service::create(
            [
                'nomService'=>'Matières scientifiques',
                'categorie_id'=> 2    
            ]
        );
        App\Service::create(
            [
                'nomService'=>'Autres',
                'categorie_id'=> 2    
            ]
        );
        // population pour Aide ménagère.
        App\Service::create(
            [
                'nomService'=>'Nettoyage',
                'categorie_id'=> 3    
            ]
        );
        App\Service::create(
            [
                'nomService'=>'Repassage',
                'categorie_id'=> 3    
            ]
        );
        // les services pour Animaux.
        App\Service::create(
            [
                'nomService'=>'Promenade',
                'categorie_id'=> 4    
            ]
        );
        App\Service::create(
            [
                'nomService'=>"Garde d'animaux",
                'categorie_id'=> 4    
            ]
        );
        // les services pour Démenagements
        App\Service::create(
            [
                'nomService'=>'Aide démenagement',
                'categorie_id'=> 5    
            ]
        );        
        // les services pour Travaux et entretien habitat.
        App\Service::create(
            [
                'nomService'=>'Peinture',
                'categorie_id'=> 6    
            ]
        ); 
        App\Service::create(
            [
                'nomService'=>'Plomberie',
                'categorie_id'=> 6    
            ]
        );
        App\Service::create(
            [
                'nomService'=>'Electricité',
                'categorie_id'=> 6    
            ]
        );
        App\Service::create(
            [
                'nomService'=>'Jardinage',
                'categorie_id'=> 6    
            ]
        ); 
        App\Service::create(
            [
                'nomService'=>'Petits travaux manuel',
                'categorie_id'=> 6    
            ]
        ); 
        App\Service::create(
            [
                'nomService'=>'Montage de meubles',
                'categorie_id'=> 6    
            ]
        );     
    }
}
