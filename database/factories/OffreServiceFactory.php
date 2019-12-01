<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Carbon\Carbon;
use App\Localisation;
use App\OffreService;
use Faker\Generator as Faker;

function getRandGeo($url)
{
    $results = file_get_contents($url);
    $elements = json_decode($results, true);
    $id = rand(0, count($elements) - 1);
    return $elements[$id];
}

$factory->define(OffreService::class, function (Faker $faker) {

    $localisation_id = rand(1, 12);
    $localisation_code = Localisation::find($localisation_id)->code;
    $departement = getRandGeo('https://geo.api.gouv.fr/regions/' . $localisation_code . '/departements');
    $commune = getRandGeo('https://geo.api.gouv.fr/departements/' . $departement['code'] . '/communes');
    $obsolete = rand(0, 1);

    return [

        'titre' => $faker->sentence($nbWords = 3, $variableNbWords = true),
        'texte' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        'service_id' => rand(1, 18),
        'localisation_id' => $localisation_id,
        'user_id' => rand(2, 3),
        'departement' => $departement['code'],
        'commune' => $commune['code'],
        'commune_name' => $commune['nom'],
        'commune_postal' => $commune['codesPostaux'][0],
        'pseudo' => $faker->word,
        'email' => $faker->email,
        'limit' => $obsolete ? Carbon::now()->subDayss(rand(1, 30)) : Carbon::now()->addWeeks(rand(1, 4)),
        'active' => rand(0, 1),
    ];
});
