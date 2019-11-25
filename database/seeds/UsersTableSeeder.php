<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create(
            [
                'name'=> 'admin',
                'email'=> 'admin@admin.com',
                'password'=> bcrypt('12345678'),
                'role'=>'admin'
            ]
        );

        App\User::create(
            [
                'name'=> 'master',
                'email'=> 'master@master.com',
                'password'=>bcrypt('12345678'),
                'role'=>'admin'
            ]
        );

        App\User::create(
            [
                'name'=>'ibn',
                'email'=>'ibn.ali@gmx.fr',
                'password'=>bcrypt('12345678'),
            ]
        );
    }
}
