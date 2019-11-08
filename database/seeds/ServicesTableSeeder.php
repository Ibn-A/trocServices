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
                'nomService'=>'jardinage',    
            ]
        );

        App\Service::create(
            [
                'nomService'=>'massage',    
            ]
        );
        
        
    }
}
