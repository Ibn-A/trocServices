<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function view(){
        $user = Auth::user();
        
        return view('user.view', compact('user'));
    }
}
