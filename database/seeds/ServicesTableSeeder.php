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
            ]
        );

        App\Service::create(
            [
                'nomService'=>'menage',    
            ]
        );

        App\Service::create(
            [
                'nomService'=>'demarche_administratif',    
            ]
        );

        App\Service::create(
            [
                'nomService'=>'cuisine',    
            ]
        );

        App\Service::create(
            [
                'nomService'=>'plomberie',    
            ]
        );        
        
    }
}
