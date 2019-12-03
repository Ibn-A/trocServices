<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
     /**
     * 
     */
    public function index(Request $request)
    {
        $offreServices = $this->offreRepository->getByUser($request->user());

        $offreAttenteCount =$this->offreRepository->noActiveCount($offreServices);
        $offreActiveCount = $this->offreRepository->noActiveCount($offreServices);
        $offrePerimesCount = $this->offreRepository->obsoleteCount($offreServices);

        return view('user.index', compact('offreActives','offrePermiesCount','offreAttenteCount'));

    }
}
