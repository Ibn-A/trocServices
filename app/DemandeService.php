<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DemandeService extends Model
{
    protected $fillable = [
        'objet_demande','contenu_demande'
    ];
}
