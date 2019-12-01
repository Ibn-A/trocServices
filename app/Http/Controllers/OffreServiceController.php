<?php

namespace App\Http\Controllers;

use App\Service;
use App\Localisation;
use Illuminate\Http\Request;

class OffreServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @param String $localisationSlug
     * @param Integer $departementCode
     * @param Integer $communeCode
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $regionSlug = null, $departementCode = null, $communeCode = null)
    {
        // on récupère tous les services dans la vue dans l'ordre alphabétique
        $services = Service::select('nomService', 'id')->oldest('nomService')->get();
        // on récupère la liste complète des régions par ordre alphabétique
        $localisations = Localisation::select('id','code','name')->oldest('name')->get();
    
        //on regarde s'il y a une pagination et on renvoie le numéro de la page.
        $page = $request->query('page', 0);
        // on renvoie tout ça dans un vue.
        Return view('offresVue', compact('services', 'localisations', 'departementCode', 'communeCode', 'page'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
}
