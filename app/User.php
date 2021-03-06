<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','dateNaissance', 'commune', 'photo','admin'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Obtenir les demandes de services d'un utilisateur.
     */
    public function demandeServices()
    {
        return $this->hasMany('App\DemandeService');
    }

    /**
     * Obtenir les offres de services d'un utilisateur.
     */
    public function offreServices()
    {
        return $this->hasMany('App\OffreService');
    }
}
