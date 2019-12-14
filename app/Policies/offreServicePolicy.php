<?php

namespace App\Policies;

use App\OffreService;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class offreServicePolicy
{
    use HandlesAuthorization;

    /**
     * Grant all abilities to administrator.
     *
     * @param  \App\Models\User  $user
     * @return bool
     */
    public function before(User $user)
    {
        if($user->admin) {
            return true;
        }
    }

    /**
     * Determine whether the user can view the ad.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\OffreService $offreService
     * @return mixed
     */
    public function show(?User $user, OffreService $offreService)
    {
        if($user) {
            return true;
        }
        return $offreService->active;
    }

    /**
     * Determine whether the user can view any offre services.
     *
     * @param  \App\User  $user
     * @param \App\OffreService $offreService
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the offre service.
     *
     * @param  \App\User  $user
     * @param  \App\OffreService  $offreService
     * @return mixed
     */
    public function view(User $user, OffreService $offreService)
    {
        //
    }

    /**
     * Determine whether the user can create offre services.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the offre service.
     *
     * @param  \App\User  $user
     * @param  \App\OffreService  $offreService
     * @return mixed
     */
    public function update(User $user, OffreService $offreService)
    {
        //
    }

    /**
     * Determine whether the user can delete the offre service.
     *
     * @param  \App\User  $user
     * @param  \App\OffreService  $offreService
     * @return mixed
     */
    public function delete(User $user, OffreService $offreService)
    {
        //
    }

    /**
     * Determine whether the user can restore the offre service.
     *
     * @param  \App\User  $user
     * @param  \App\OffreService  $offreService
     * @return mixed
     */
    public function restore(User $user, OffreService $offreService)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the offre service.
     *
     * @param  \App\User  $user
     * @param  \App\OffreService  $offreService
     * @return mixed
     */
    public function forceDelete(User $user, OffreService $offreService)
    {
        //
    }
}
