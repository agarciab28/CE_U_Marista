<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\User;
use App\Models\carrera;
use App\Models\persona;
use App\Models\alumno;
use App\Models\coordinador;
use App\Models\profesor;
use App\Models\materia;
use App\Models\personal;
use App\Models\plan_de_estudios;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        /*return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ])*/;
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        //
    }
    public function registro(Request $request){

      $datos=$request;

      try {
$file=$datos->file('imagen');
$nombre=$file->getClientOriginalName();
        $persona=new persona();
        $persona->rol=$request['rol'];
        $persona->nombres=$request['nombres'];
        $persona->apaterno=$request['apaterno'];
        $persona->amaterno=$request['amaterno'];
        $persona->sexo=$request['sexo'];
        $persona->email=$request['email'];
        $persona->fnaci=$request['fnaci'];
        $persona->curp=$request['curp'];
        $persona->imagen=$nombre;
        $persona->save();
        \Storage::disk('local')->put($nombre, \File::get($file));
        $id_persona=persona::where('curp',$datos['curp'])->get(['id_persona'])->first();

        $planes= plan_de_estudios::select('id_plan','id_carrera','nombre_plan')->get();

        if($datos['rol']=='Alumno'){

          $alumno= new alumno();
          $alumno->id_persona=$id_persona['id_persona'];
          $alumno->ncontrol=$datos['ncontrol'];
          $alumno->id_carrera=$datos['id_carrera'];
          $alumno->semestre=$datos['semestre'];
          $alumno->plan_de_estudios=$datos['plan_de_estudios'];
          $alumno->password=hash_hmac('sha256', "secret", env('HASH_KEY'));
          $alumno->save();
        }else {

          $personal=new personal();
          $personal->username=$datos['username'];
          $personal->ced_fiscal=$datos['ced_fiscal'];
          $personal->password=hash_hmac('sha256', "secret", env('HASH_KEY'));
          $personal->nssoc=$datos['nssoc'];
          $personal->id_persona=$id_persona['id_persona'];
          $personal->activo='1';
          $personal->save();

          if($datos['rol']=='Coordinador'){

            $coordinador= new coordinador();
            $coordinador->id_carrera=$datos['id_carrera_coordinador'];
            $coordinador->username=$datos['username'];
            $coordinador->save();

          }else if($datos['rol']=='Profesor'){


            $profesor = new profesor();
            $profesor->especialidad=$datos['especialidad_profe'];
            $profesor->username=$datos['username'];
            $profesor->save();
          }
        }


      } catch (\Exception $e) {

        $registro=false;
        $carreras= carrera::get(['id_carrera','nombre_carrera']);
        return view('admin.registrar',compact(['registro','carreras','planes']));
      }


      $registro=true;
      $carreras= carrera::get(['id_carrera','nombre_carrera']);
      return view('admin.registrar',compact(['registro','carreras','planes']));

    }

    public function showForm(){
      $carreras= carrera::get(['id_carrera','nombre_carrera']);
      $planes= plan_de_estudios::select('id_plan','id_carrera','nombre_plan')->get();
      $registro=false;
      return view('admin.registrar',compact(['registro','carreras','planes']));
    }


}
