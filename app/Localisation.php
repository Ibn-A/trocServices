<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Localisation extends Model
{
    protected $fillable = [
        'adresse_localisation','cp_localisation','ville_localisation'
    ];
}
