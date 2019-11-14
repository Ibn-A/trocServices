<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OffreService extends Model
{
    protected $fillable = [
        'objet_offre', 'contenu_offre','user_id','service_id','localisation_id'
    ];

    /**
     * Obtenir l'identité de l'offreur du service.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    /**
     * Obtenir le type de service correspondant à l'offre de service.
     */
    public function service()
    {
        return $this->belongsTo('App\Service');
    }
    /**
     * Obtenir la localisation du service offert.
     */
    public function localisation()
    {
        return $this->belongsTo('App\Localisaton');
    }
}
