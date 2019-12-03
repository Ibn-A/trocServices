<?php

namespace App\Http\Controllers;

use App\Service;
use Carbon\Carbon;
use App\Localisation;
use Illuminate\Http\Request;
use App\Repositories\OffreRepository;

class OffreServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @param Integer $departementCode
     * @param Integer $communeCode
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $departementCode = null, $communeCode = null)
    {
        // on récupère tous les services dans la vue dans l'ordre alphabétique
        $services = Service::select('nomService', 'id')->oldest('nomService')->get();
        // on récupère la liste complète des régions par ordre alphabétique
        $localisations = Localisation::select('id','code','name')->oldest('name')->get();
        //on regarde s'il y a une pagination et on renvoie le numéro de la page.
        $page = $request->query('page', 0);
        // on renvoie tout ça dans un vue.
        Return view('offreServices.offresVue', compact('services', 'localisations', 'departementCode', 'communeCode', 'page'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        $services = Service::select('nomService','id')->oldest('nomService')->get();
        $localisations = Localisation::select('name','id')->oldest('name')->get();

        return view('create', compact('services','localisations'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OffreStore $request)
    {
        $commune = json_decode(file_get_contents('https://geo.api.gouv.fr/communes/' . $request->commune), true);
        
        $offre = $this->offreRepository->create([
            'title' => $request->title,
            'texte' => $request->texte,
            'service_id' => $request->service,
            'localisation_id' => $request->localisation,
            'departement' => $request->departement,
            'commune' => $request->commune,
            'commune_name' => $commune['nom'],
            'commune_postal' => $commune['codesPostaux'][0],
            'user_id' => auth()->check() ? auth()->id() : 0,
            'pseudo' => auth()->check() ? auth()->user()->name :$request->pseudo,
            'email' => auth()->check() ? auth()->user()->email : $request->email,
            'limit' => Carbon::now()->addWeeks($request->limit),
        ]);
        
        return view('adconfirm');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Search ads.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $offreServices = $this->offreRepository->search($request);
        return view('partials.offreServices', compact('offreServices'));
    }

}
