<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Message;
use Faker\Generator as Faker;

$factory->define(Message::class, function (Faker $faker) {
    return [
        'titre' => $faker->sentence($nbWords = 3, $variableNbWords = true),
        'email' => $faker->email,
        'texte' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        'OffreService_id' => rand(1, 10),
        'DemandeService_id' => rand(1, 10)
    ];
});
