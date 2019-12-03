<?php
namespace App\Repositories;
use App\Models\Ad;
use Carbon\Carbon;
class AdRepository
{
    /**
     * Search.
     *
     * @param \Illuminate\Http\Request $request
     */
    public function search($request)
    {
        $offreServices = OffreService::query();
        if($request->localisation != 0) {
            $offreServices = OffreService::whereHas('localisation', function ($query) use ($request) {
                $query->where('localisation.id', $request->region);
            })->when($request->departement != 0, function ($query) use ($request) {
                return $query->where('departement', $request->departement);
            })->when($request->commune != 0, function ($query) use ($request) {
                return $query->where('commune', $request->commune);
            });
        }
        if($request->category != 0) {
            $offreServices->whereHas('service', function ($query) use ($request) {
                $query->where('services.id', $request->category);
            });
        }
        return $offreServices->with('service')
            ->whereActive(true)
            ->latest()
            ->paginate(3);
    }
    /**
     * Methode getByUser & activeCount
     */
    public function activeCount($offreServices)
    {
        return $offreServices->where('active', true)->where('limit','>=', Carbon::now())->count();
    }

    public function getByUser($user)
    {
        return $user->offreServices()->get();
    }