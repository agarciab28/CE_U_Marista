<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Models\carrera;
use App\Models\persona;
use App\Models\alumno;
use App\Models\coordinador;
use App\Models\profesor;
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
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' =>($data['password']),
        ]);
    }
    public function registro(){

      $datos = $this->validate(request(),[
        'rol'=>'string',
        'nombres'=>'string',
        'apaterno'=>'string',
        'amaterno'=>'string',
        'sexo'=>'string',
        'email'=>'string',
        'fnaci'=>'string',
        'curp'=>'string',
        'ncontrol'=>'string|nullable',
        'id_carrera'=>'string|nullable',
        'semestre'=>'string|nullable',
        'plan_de_estudios'=>'string|nullable',
        'id_coordinador'=>'string|nullable',
        'id_carrera_coordinador'=>'string|nullable',
        'ced_fiscal'=>'string|nullable',
        'nssoc'=>'string|nullable',
        'id_prof'=>'string|nullable',
        'especialidad_profe'=>'string|nullable',
        'cedulap'=>'string|nullable',
        'nssocp'=>'string|nullable'
      ]);
      try {
        $persona=new persona();
        $persona->rol=$datos['rol'];
        $persona->nombres=$datos['nombres'];
        $persona->apaterno=$datos['apaterno'];
        $persona->amaterno=$datos['amaterno'];
        $persona->sexo=$datos['sexo'];
        $persona->email=$datos['email'];
        $persona->fnaci=$datos['fnaci'];
        $persona->curp=$datos['curp'];
        $persona->save();

        $id_persona=persona::where('curp',$datos['curp'])->get(['id_persona'])->first();

        if($datos['rol']=='Alumno'){
          $alumno= new alumno();
          $alumno->id_persona=$id_persona['id_persona'];
          $alumno->ncontrol=$datos['ncontrol'];
          $alumno->id_carrera=$datos['id_carrera'];
          $alumno->semestre=$datos['semestre'];
          $alumno->plan_de_estudios=$datos['plan_de_estudios'];
          $alumno->password=hash_hmac('sha256', "secret", env('HASH_KEY'));
          $alumno->save();
        }else if($datos['rol']=='Coordinador'){
          $coordinador= new coordinador();
          $coordinador->id_persona=$id_persona['id_persona'];
          $coordinador->id_coordinador=$datos['id_coordinador'];
          $coordinador->id_carrera=$datos['id_carrera_coordinador'];
          $coordinador->ced_fiscal=$datos['ced_fiscal'];
          $coordinador->nssoc=$datos['nssoc'];
          $coordinador->password=hash_hmac('sha256', "secret", env('HASH_KEY'));
          $coordinador->save();
        }else if($datos['rol']=='Profesor'){
          $profesor = new profesor();
          $profesor->id_persona=$id_persona['id_persona'];
          $profesor->id_prof=$datos['id_prof'];
          $profesor->especialidad=$datos['especialidad_profe'];
          $profesor->ced_fiscal=$datos['cedulap'];
          $profesor->nssoc=$datos['nssocp'];
          $profesor->password=hash_hmac('sha256', "secret", env('HASH_KEY'));
          $profesor->save();
        }
      } catch (\Exception $e) {
        $registro=false;
        $carreras= carrera::get(['id_carrera','nombre_carrera']);
        return view('admin.registrar',compact(['registro','carreras']));
      }
      $registro=true;
      $carreras= carrera::get(['id_carrera','nombre_carrera']);
      return view('admin.registrar',compact(['registro','carreras']));

    }
    public function showForm(){
      $carreras= carrera::get(['id_carrera','nombre_carrera']);
      $registro=false;
      return view('admin.registrar',compact(['registro','carreras']));
    }
    //Seccion de registro de grupos
    public function registroG(){
      $datos = $this->validate(request(),[
        'idgrupo'=>'string',
        'seccion'=>'string',
        'carrera'=>'string',
        'materia'=>'string',
        'profesor'=>'string',
        'periodo'=>'string',
      ]);
      try {
        DB::insert(
          'insert into grupo (id_grupo,seccion,id_carrera,id_materia,id_prof,periodo)
          values (?,?,?,?,?,?)',[

            $datos['idgrupo'],
            $datos['seccion'],
            $datos['carrera'],
            $datos['materia'],
            $datos['profesor'],
            $datos['periodo'],
          ]);
          $registro=true;
      } catch (\Exception $e) {
        dd($e);
          $registro=false;
      }
      $carreras= carrera::get(['id_carrera','nombre_carrera']);
      return view('admin.asignar',compact(['registro','carreras']));
    }
    public function showFormG(){
      $carreras= carrera::get(['id_carrera','nombre_carrera']);
      $registro=false;
      return view('admin.grupos',compact(['registro','carreras']));
    }

}
