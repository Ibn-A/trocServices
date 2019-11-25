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
        App\Service::create(
            [
                'nomService'=>'massage',
                'categorie_id'=> 1

            ]
        );

        App\Service::create(
            [
                'nomService'=>'menage',
                'categorie_id'=> 2    
            ]
        );

        App\Service::create(
            [
                'nomService'=>'administratif',
                'categorie_id'=> 3    
            ]
        );

        App\Service::create(
            [
                'nomService'=>'cuisine',
                'categorie_id'=> 4    
            ]
        );

        App\Service::create(
            [
                'nomService'=>'plomberie',
                'categorie_id'=> 5    
            ]
        );        
        
    }
}
