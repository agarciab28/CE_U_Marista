<?php

namespace App\Http\Controllers\Auth;
use Auth;

use App\Http\Controllers\Controller;

class LoginController extends Controller
{

    public function login(){
      $credentials = $this->validate(request(), [
        'id_persona' => 'required|string',
        'contrasena' => 'required|string'
      ]);

      if(Auth::attempt($credentials)){
        return redirect()->route('dashboard');
      }
      return back()->withErrors(['id_persona' => 'Sin registro']);
    }
}
