<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $fillable = [
        'nomCategorie'
    ];
    /**
     * Obtenir tous les services associés à une catégorie.
     */
    public function service()
    {
        return $this->hasMany('App\service');
    }
}
