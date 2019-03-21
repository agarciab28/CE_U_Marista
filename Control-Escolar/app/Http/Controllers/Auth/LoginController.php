<?php

namespace App\Http\Controllers\Auth;
use Auth;
use App;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{

    public function login(){
      $credentials = $this->validate(request(), [
        'ncontrol' => 'required|string',
        'password' => 'required|string'
      ]);
      //dd(SHA256($data['password']));
      if(Auth::attempt($credentials)){
        return view('dashboard');
      }
      return back()->withErrors(['ncontrol' => 'Sin registro']);
    }
    public function loginAdmin(){
      $credentials = $this->validate(request(), [
        'id_admin' => 'required|string',
        'password' => 'required|string'
      ]);
      if(Auth::guard('admins')->attempt($credentials)){
        return view('admin.home');
      }
      return back()->withErrors(['id_admin' => 'Sin registro']);
    }
}
