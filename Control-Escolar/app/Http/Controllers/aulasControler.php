<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\aula;

class aulasControler extends Controller
{
    public function showAulas(){
      $aulas=aula::get();
      return view('admin.aulas',compact('aulas'));
    }

    public function registro(Request $request){
      $aula= new aula();
      $aula->aula=$request->aula;
      $aula->edificio=$request->edificio;
      $aula->tipo=$request->tipo;
      $aula->activo='1';
      $aula->save();

      $aulas=aula::get();
      return view('admin.aulas',compact('aulas'));
    }


    public function elimina($aula){
      $seleccion=aula::select('activo')->where('aula',$aula)->first();

      if($seleccion->activo>0){
        aula::where('aula',$aula)->update(['activo'=>0]);

      }else{
        aula::where('aula',$aula)->update(['activo'=>1]);
      }
      $aulas=aula::get();
      return view('admin.aulas',compact('aulas'));

    }

    public function modifica(Request $request){
      aula::where('aula',$request->aula)->update([
        'edificio'=>$request->edificio,
        'tipo'=>$request->tipo
      ]);
      $aulas = aula::get();
      //dd($personas);
      $registro=true;
      return view('admin.aulas',compact(['aulas']));
    }
}
