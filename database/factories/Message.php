<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {

    return [
        'email' => $faker->email,
        'texte' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        'offreService_id' => rand(1, 10),
        'demandeService_id' => rand(1, 10),
    ];
});
