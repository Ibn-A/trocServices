<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD

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

=======
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function view(){
        $user = Auth::user();
        
        return view('user.view', compact('user'));
>>>>>>> ff530bcb5190ad7398e49e8b8211ac901927a6a8
    }
}
