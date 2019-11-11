<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DemandeService extends Model
{
    protected $fillable = [
        'objet_demande','contenu_demande'
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
}
