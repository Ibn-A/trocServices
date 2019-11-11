<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OffreService extends Model
{
    protected $fillable = [
        'objet_offre', 'contenu_offre'
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
        return $this->belongsTo('App\service');
    }
    
}
