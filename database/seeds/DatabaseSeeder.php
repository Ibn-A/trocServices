<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(ServicesTableSeeder::class);
        $this->call(LocalisationsTableSeeder::class);
        factory(App\OffreService::class, 40)->create();
        factory(App\DemandeService::class, 40)->create();
        factory(App\Message::class, 20)->create();
    
    }
}
