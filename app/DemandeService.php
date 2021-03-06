<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DemandeService extends Model
{
    protected $fillable = [
        'titre', 'texte','user_id','service_id','localisation_id','departement','commune','commune_name','commune_postal','pseudo','email','limit','active'
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
    /**
     * Obtenir les messages liées à la demandeService.
     */
    public function message()
    {
        return $this->hasMany('App\Message');
    }
    /**
     * Obtenir les photos liées a une demandeService.
     */
    public function upload()
    {
        return $this->hasMany('App\Upload');
    }
     /**
     * Obtenir les matching(offres de services) liées a une demande de Service.
     */
    public function matching(){
        return $this->hasMany('App\Matching');
    }


}
