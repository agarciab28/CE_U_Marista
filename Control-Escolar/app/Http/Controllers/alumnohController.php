<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\grupo;
use App\Models\carrera;
use App\Models\profesor;
use App\Models\persona;
use App\Models\materia;
use Illuminate\Support\Facades\DB;
use App\Models\lista_grupo;
use App\Models\horario;
use App\Models\alumno;

class alumnohController extends Controller
{
    public function showHorarios($idp){
        $nombres=persona::select('nombres')->where('id_persona',$idp)->value('nombres');
        $horariolu=grupo::select('grupo.id_grupo as grupo','nombre_materia','nombres','apaterno','amaterno','aula_lu','hora_i_lu','hora_f_lu',
        'grupo.activo as activo','grupo.id_carrera as id_carrera')
        ->join('materia as m','m.id_materia','=','grupo.id_materia')
        ->join('profesor as p','p.id_prof','=','grupo.id_prof')
        ->join('personal as per','per.username','p.username')
        ->join('persona as pe','pe.id_persona','=','per.id_persona')
        ->join('horario as h','h.id_grupo','=','grupo.id_grupo')
        ->whereNotNull('hora_i_lu')
        ->where('pe.nombres',$nombres)
        ->get();
        $horarioma=grupo::select('grupo.id_grupo as grupo','nombre_materia','nombres','apaterno','amaterno','aula_ma','hora_i_ma','hora_f_ma',
        'grupo.activo as activo','grupo.id_carrera as id_carrera')
        ->join('materia as m','m.id_materia','=','grupo.id_materia')
        ->join('profesor as p','p.id_prof','=','grupo.id_prof')
        ->join('personal as per','per.username','p.username')
        ->join('persona as pe','pe.id_persona','=','per.id_persona')
        ->join('horario as h','h.id_grupo','=','grupo.id_grupo')
        ->whereNotNull('hora_i_ma')
        ->where('pe.nombres',$nombres)
        ->get();
        $horariomi=grupo::select('grupo.id_grupo as grupo','nombre_materia','nombres','apaterno','amaterno','aula_mi','hora_i_mi','hora_f_mi',
        'grupo.activo as activo','grupo.id_carrera as id_carrera')
        ->join('materia as m','m.id_materia','=','grupo.id_materia')
        ->join('profesor as p','p.id_prof','=','grupo.id_prof')
        ->join('personal as per','per.username','p.username')
        ->join('persona as pe','pe.id_persona','=','per.id_persona')
        ->join('horario as h','h.id_grupo','=','grupo.id_grupo')
        ->whereNotNull('hora_i_mi')
        ->where('pe.nombres',$nombres)
        ->get();
        $horarioju=grupo::select('grupo.id_grupo as grupo','nombre_materia','nombres','apaterno','amaterno','aula_ju','hora_i_ju','hora_f_ju',
        'grupo.activo as activo','grupo.id_carrera as id_carrera')
        ->join('materia as m','m.id_materia','=','grupo.id_materia')
        ->join('profesor as p','p.id_prof','=','grupo.id_prof')
        ->join('personal as per','per.username','p.username')
        ->join('persona as pe','pe.id_persona','=','per.id_persona')
        ->join('horario as h','h.id_grupo','=','grupo.id_grupo')
        ->whereNotNull('hora_i_ju')
        ->where('pe.nombres',$nombres)
        ->get();
        $horariovi=grupo::select('grupo.id_grupo as grupo','nombre_materia','nombres','apaterno','amaterno','aula_vi','hora_i_vi','hora_f_vi',
        'grupo.activo as activo','grupo.id_carrera as id_carrera')
        ->join('materia as m','m.id_materia','=','grupo.id_materia')
        ->join('profesor as p','p.id_prof','=','grupo.id_prof')
        ->join('personal as per','per.username','p.username')
        ->join('persona as pe','pe.id_persona','=','per.id_persona')
        ->join('horario as h','h.id_grupo','=','grupo.id_grupo')
        ->whereNotNull('hora_i_vi')
        ->where('pe.nombres',$nombres)
        ->get();
        $horariosa=grupo::select('grupo.id_grupo as grupo','nombre_materia','nombres','apaterno','amaterno','aula_sa','hora_i_sa','hora_f_sa',
        'grupo.activo as activo','grupo.id_carrera as id_carrera')
        ->join('materia as m','m.id_materia','=','grupo.id_materia')
        ->join('profesor as p','p.id_prof','=','grupo.id_prof')
        ->join('personal as per','per.username','p.username')
        ->join('persona as pe','pe.id_persona','=','per.id_persona')
        ->join('horario as h','h.id_grupo','=','grupo.id_grupo')
        ->whereNotNull('hora_i_sa')
        ->where('pe.nombres',$nombres)
        ->get();
       return view('alumno.grupos',compact(['horariolu','horarioma','horariomi','horarioju','horariovi','horariosa']));
     }
}
