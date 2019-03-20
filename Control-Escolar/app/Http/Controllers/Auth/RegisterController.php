<?php

namespace App\Http\Controllers\Auth;

use App\User;
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
    public function __construct()
    {
        $this->middleware('guest');
    }

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
        'calle'=>'string',
        'num_ext'=>'string',
        'num_int'=>'string',
        'colonia'=>'string',
        'codigo_postal'=>'string',
        'ciudad'=>'string',
        'estado'=>'string',
        'num_tel'=>'string',
        'num_cel'=>'string',
      ]);
      //dd($datos);
      DB::insert(
        'insert into persona (id_persona,rol,nombres,apaterno,amaterno,sexo,email,fnaci,calle,num_ext,num_int,colonia,codigo_postal,ciudad,estado,num_tel,num_cel)
        values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)',[
          $datos['apaterno'],
          $datos['rol'],
          $datos['nombres'],
          $datos['apaterno'],
          $datos['amaterno'],
          $datos['sexo'],
          $datos['email'],
          $datos['fnaci'],
          $datos['calle'],
          $datos['num_ext'],
          $datos['num_int'],
          $datos['colonia'],
          $datos['codigo_postal'],
          $datos['ciudad'],
          $datos['estado'],
          $datos['num_tel'],
          $datos['num_cel']
        ]);
        return view('admin.registroExitoso');

    }
}
