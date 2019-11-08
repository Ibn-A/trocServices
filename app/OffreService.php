<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OffreService extends Model
{
    protected $fillable = [
        'objet_offre', 'contenu_offre'
    ];
}
