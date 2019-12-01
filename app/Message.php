<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'titre',
        'texte',
        'email',
        'offreService_id',
        'demandeService_id',
    ];
    /**
     * obtenir l'offreService concerné par le message.
     */
    public function offreService(){
        return $this->belongsTo('App\OffreService');
    }

    /**
     * obtenir la demandeService concerné par le message.
     */
    public function demandeService(){
        return $this->belongsTo('App\DemandeService');
    }

}
