<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Localisation extends Model
{
    protected $fillable = [
        'adresse_localisation','cp_localisation','ville_localisation'
    ];
    /**
     * Obtenir les demandes de services d'une localisation.
     */
    public function demandeServices()
    {
        return $this->hasMany('App\DemandeService');
    }
    /**
     * Obtenir les offres de services d'une localisation.
     */
    public function offreServices()
    {
        return $this->hasMany('App\OffreService');
    }

}
