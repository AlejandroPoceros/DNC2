<?php

namespace App\Http\Controllers;
use Laravel\Socialite\Facades\Socialite;

use Illuminate\Http\Request;

class LoginController extends Controller
{
public function logeo (){
    return Socialite::driver('microsoft')->redirect();
}

public function callback (){
    dd('accediste');
}

}
