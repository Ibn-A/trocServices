<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'nomService'
    ];
    /**
     * Obtenir les demandes de services associés à un service type.
     */
    public function demandeServices()
    {
        return $this->hasMany('App\DemandeService');
    }
     /**
      * Obtenir les offres de services associés à un service type.
      */
    public function offreServices()
    {
        return $this->hasMany('App\OffreService');
    }
}
