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

    public function login(Request $request){
      $credentials = $this->validate(request(), [
        'ncontrol' => 'required|string',
        'password' => 'required|string'
      ]);
      //dd(SHA256($data['password']));
      if(Auth::attempt($credentials)){
        $request->session()->regenerate();
        $usuario=auth()->user()->id_persona;
        $datos=persona::join('alumno as a','a.id_persona','=','persona.id_persona')
          ->where('a.id_persona','=',$usuario)->get()->first();
        $imagen=$datos->imagen;
        $idp=$datos->id_persona;
        $url=Storage::url($imagen);
        $nombre =$datos->nombres." ".$datos->apaterno." ".$datos->amaterno;

        //$request->session()->put('id_admin', $request->id_admin);
        session(['ncontrol'=>$datos->ncontrol,'nombre'=>$nombre,'url'=>$url,'rol'=>$datos->rol,'id_persona'=>$idp]);
        return redirect()->route('alumno_home');
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
