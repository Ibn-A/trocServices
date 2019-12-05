<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matching extends Model
{
    protected $fillable = [
    
        'offreService_id',
        'demandeService_id',
    ];

    /**
     * obtenir l'offreService concerné par le matching.
     */
    public function offreService(){
        return $this->belongsTo('offreService');
    }

    /**
     * obtenir la demandeSerice concerné par le matching.
     */
    public function demandeService(){
        return $this->belongsTo('demandeService');
    }
}
