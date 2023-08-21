<?php

namespace App\Http\Controllers;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Agrega esta línea para importar la clase Auth

class LoginController extends Controller
{
    public function logeo()
    {
        return Socialite::driver('microsoft')->redirect();

    }

public function callback (){
   dd('accediste');
   //return redirect()->route('dashboard');
  // return view('dashboard');

  // return redirect()->route('dashboard');
    
  //return redirect()->intended('dashboard');









}

}
