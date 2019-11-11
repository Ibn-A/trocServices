<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OffreService extends Model
{
    protected $fillable = [
        'objet_offre', 'contenu_offre'
    ];

    /**
     * obtenir l'identité de l'offreur du service.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
