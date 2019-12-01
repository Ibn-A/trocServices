<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    //afficher la map pour les offres de servies
    public function mapOffre()
    {
        return view('offreServices.home');
    }

    //afficher la map pour les demandes de servies
    public function mapDemande()
    {
        return view('demandeServices.home');
    }
}
