<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\configuracion;

class configController extends Controller
{
    public function showConfiguracion()
    {
        $config = configuracion::get();
        $registro = false;
        return view("admin.calendario", compact(["config", "registro"]));
    }
    public function inserta(Request $request)
    {
        try {
            $config = configuracion::get();
            $configuracion = new configuracion();
            $configuracion->periodo_actual = $request->periodo_actual;
            $configuracion->fecha_inicio = $request->fecha_inicio;
            $configuracion->fecha_terminacion = $request->fecha_terminacion;
            $configuracion->director = $request->director;
            $configuracion->jefe_control_escolar = $request->jefe_control_escolar;
            $configuracion->created_at = $request->created_at;
            $configuracion->updated_at = $request->updated_at;
            $configuracion->save();
        } catch (\Exception $e) {
            dd($e);
            $registro = false;
        }
        $registro = true;
        return view("admin.calendario", compact([ "config", "registro"]));
    }
    public function registro(Request $request)
    {
        dd($request);
        $configuracion = new configuracion();
    }
}
