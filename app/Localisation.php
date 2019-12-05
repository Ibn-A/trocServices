<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Localisation extends Model
{
    protected $fillable = [
        'name', 'slug','code'
    ];
    /**
     * Obtenir les demandes de services d'une localisation.
     */
    public function demandeService()
    {
        return $this->hasMany('App\DemandeService');
    }
    /**
     * Obtenir les offres de services d'une localisation.
     */
    public function offreService()
    {
        return $this->hasMany('App\OffreService');
    }

}
