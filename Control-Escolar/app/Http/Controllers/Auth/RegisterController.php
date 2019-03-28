<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Models\carrera;
use App\Models\persona;
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
            'password' =>SHA256($data['password']),
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
        'ncontrol'=>'string',
        'id_carrera'=>'string',
        'semestre'=>'string',
        'plan_de_estudios'=>'string'
      ]);
      try {
        DB::insert(
          'insert into persona (rol,nombres,apaterno,amaterno,sexo,email,fnaci,curp)
          values (?,?,?,?,?,?,?,?)',[

            $datos['rol'],
            $datos['nombres'],
            $datos['apaterno'],
            $datos['amaterno'],
            $datos['sexo'],
            $datos['email'],
            $datos['fnaci'],
            $datos['curp']
          ]);

          $id_persona=persona::where('curp',$datos['curp'])->get(['id_persona'])->first();
          if($datos['rol']=='Alumno'){

            DB::insert(
              'insert into alumno (id_persona,ncontrol,id_carrera,semestre,plan_de_estudios,password)
              values (?,?,?,?,?,?)',[
                $id_persona['id_persona'],
                $datos['ncontrol'],
                $datos['id_carrera'],
                $datos['semestre'],
                $datos['plan_de_estudios'],
                hash_hmac('sha256', $value, env('HASH_KEY')),
              ]);
          }elseif($datos['rol']=='Coordinador'){

          }elseif($datos['rol']=='Profesor'){

          }
          $registro=true;
      } catch (\Exception $e) {
        dd($e);
          $registro=false;
      }
      $carreras= carrera::get(['id_carrera','nombre_carrera']);
      return view('admin.registrar',compact(['registro','carreras']));

    }
    public function showForm(){
      $carreras= carrera::get(['id_carrera','nombre_carrera']);
      $registro=false;
      return view('admin.registrar',compact(['registro','carreras']));
    }
}
