<?php

namespace App\Http\Controllers\Auth;
use Auth;
use App\Models\persona;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class LoginController extends Controller
{

    public function login(){
      $credentials = $this->validate(request(), [
        'ncontrol' => 'required|string',
        'password' => 'required|string'
      ]);
      //dd(SHA256($data['password']));
      if(Auth::attempt($credentials)){
        return view('alumno.home');
      }
      return back()->withErrors(['ncontrol' => 'Sin registro']);
    }


    public function loginAdmin(Request $request){
      $credentials = $this->validate($request, [
        'id_admin' => 'required|string',
        'password' => 'required|string'
      ]);
      if(Auth::guard('admins')->attempt($credentials,$request->remember)){
        $datos=persona::select('nombres','apaterno','amaterno','imagen')->where('id_persona',auth('admins')->user()->id_persona)->get();
        $nombre =$datos[0]->nombres." ".$datos[0]->apaterno." ".$datos[0]->amaterno;
        $imagen=$datos[0]->imagen;
        $url=Storage::url($imagen);
        $request->session()->regenerate();
        dd(session('status'));
        if(session('status')){
        return view('admin.home');
      }else return "error";
      }
      return back()->withErrors(['id_admin' => 'Sin registro']);
    }
}
