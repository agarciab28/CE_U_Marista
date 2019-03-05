<?php

namespace App\Http\Controllers\Auth;
use Auth;
use DB;
use App;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{

    public function login(){
      $credentials = $this->validate(request(), [
        'ncontrol' => 'required|string',
        'password' => 'required|string'
      ]);
      if(Auth::attempt($credentials)){
        return 'eres alumno';
      }
      return back()->withErrors(['ncontrol' => 'Sin registro']);
    }
    public function loginAdmin(){
      $credentials = $this->validate(request(), [
        'id_admin' => 'required|string',
        'password' => 'required|string'
      ]);
      if(Auth::guard('admins')->attempt($credentials)){
        return 'eres administrador';
      }
      return back()->withErrors(['id_admin' => 'Sin registro']);
    }
}
