<?php
namespace App\Repositories;
use Carbon\Carbon;
use App\OffreService;

class OffreRepository
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
                $query->where('localisation.id', $request->localisation);
            })->when($request->departement != 0, function ($query) use ($request) {
                return $query->where('departement', $request->departement);
            })->when($request->commune != 0, function ($query) use ($request) {
                return $query->where('commune', $request->commune);
            });
        }
        if($request->service != 0) {
            $offreServices->whereHas('service', function ($query) use ($request) 
            {
                $query->where('services.id', $request->service);
            });
        }
        return $offreServices->with('service')
            ->whereActive(true)
            ->latest()
            ->paginate(3);
    }

    //
    public function create()
    {
        return OffreService::create($data);
    }

    //Récupérer les photos associé a une offre
    public function getPhotos($offreService)
    {
        //return $offreService->upload()-> get();
    }

    // Récuper une annonce a partir de son identifiant.
    public function getById($id)
    {
        return OffreService::findOrFail($id);
    }

}