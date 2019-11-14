<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DemandeService extends Model
{
    protected $fillable = [
        'objet_demande','contenu_demande','user_id','service_id','localisation_id'
    ];
    /**
     * obtenir l'identité du demandeur du service.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    /**
     * Obtenir le type de service correspondant à la demande de service.
     */
    public function service()
    {
        return $this->belongsTo('App\Service');
    }
    /**
     * Obtenir la localisation du service demandé.
     */
    public function localisation()
    {
        return $this->belongsTo('App\Localisation');
    }
}
