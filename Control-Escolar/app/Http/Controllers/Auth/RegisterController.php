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
use League\Csv\Reader;
use League\Csv\Statement;

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
      try {
  
       $file=$request->file('imagen');
        //$this->validate($file, [
       //   'input_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
     // ]); 
        $nombre=time().$file->getClientOriginalName();

                $persona=new persona();
                $persona->rol=$request->rol;
                $persona->nombres=$request->nombres;
                $persona->apaterno=$request->apaterno;
                $persona->amaterno=$request->amaterno;
                $persona->sexo=$request->sexo;
                $persona->email=$request->email;
                $persona->fnaci=$request->fnaci;
                $persona->curp=$request->curp;
                $persona->imagen=$nombre;
                $persona->save();
                $file->storeAs('public', $nombre);
              //\Storage::disk('local')->put($nombre,\File::get($file));

            

        $id_persona=persona::where('curp',$request->curp)->get(['id_persona'])->first();

        $planes= plan_de_estudios::select('id_plan','id_carrera','nombre_plan')->get();

        if($request->rol=='alumno'){

          $alumno= new alumno();
          $alumno->id_persona=$id_persona->id_persona;
          $alumno->ncontrol=$request->ncontrol;
          $alumno->id_carrera=$request->id_carrera;
          $alumno->semestre=$request->semestre;
          $alumno->plan_de_estudios=$request->plan_de_estudios;
          $alumno->password=hash_hmac('sha256', $request->pass, env('HASH_KEY'));
          $alumno->activo='1';
          $alumno->save();
        }else {

          $personal=new personal();
          if($request->rol=='coord'){
            $personal->username=$request->username;
            $personal->ced_fiscal=$request->ced_fiscal;
            $personal->nssoc=$request->nssoc;
          }else if($request->rol=='prof'){
            $personal->username=$request->usernamep;
            $personal->ced_fiscal=$request->cedulap;
            $personal->nssoc=$request->nssocp;
          }
          $personal->password=hash_hmac('sha256', $request->pass, env('HASH_KEY'));
          $personal->id_persona=$id_persona->id_persona;
          $personal->activo='1';
          $personal->save();

          if($request->rol=='coord'){

            $coordinador= new coordinador();
            $coordinador->id_carrera=$request->id_carrera_coordinador;
            $coordinador->username=$request->username;
            $coordinador->save();

          }else if($request->rol=='prof'){


            $profesor = new profesor();
            $profesor->especialidad=$request->especialidad_profe;
            $profesor->username=$request->usernamep;
            $profesor->save();
          }
        }

      } catch (\Exception $e) {
        $message = "Tipo de archivo no valido";
        echo "<script type='text/javascript'>alert('$message');</script>";
        $registro=false;
        $planes= plan_de_estudios::select('id_plan','id_carrera','nombre_plan')->get();
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

    public function regAlumnoCSV(){
      $csv = Reader::createFromPath('../storage/app/files/Alumno.csv', 'r');
      $csv->setOutputBOM(Reader::BOM_UTF8);
      $csv->addStreamFilter('convert.iconv.ISO-8859-15/UTF-8');

      $csv->setHeaderOffset(0);


      $stmt = (new Statement());

      $records = $stmt->process($csv);

      $response = json_encode($csv);

      $alumnos=json_decode($response,true);
      //Por cada alumno en el array del json insertar datos
      foreach ($alumnos as $alumno) {
        //crear objeto persona
        $insertaPersona= new persona();
        $insertaPersona->rol="alumno";
        $insertaPersona->nombres=$alumno['Nombre'];
        $insertaPersona->apaterno=$alumno['Ap Paterno'];
        $insertaPersona->amaterno=$alumno['Ap Materno'];
        $insertaPersona->curp=$alumno['CURP'];
        $insertaPersona->fnaci=$alumno['Fecha Nac'];
        $insertaPersona->sexo=$alumno['Sexo (M/F)'];
        $insertaPersona->email=$alumno['Correo'];
        $insertaPersona->calle=$alumno['Calle'];
        $insertaPersona->num_int=$alumno['No Int'];
        $insertaPersona->num_ext=$alumno['No Ext'];
        $insertaPersona->colonia=$alumno['Colonia'];
        $insertaPersona->codigo_postal=$alumno['CP'];
        $insertaPersona->ciudad=$alumno['Ciudad'];
        $insertaPersona->estado=$alumno['Estado'];
        $insertaPersona->num_tel=$alumno['Teléfono'];
        $insertaPersona->num_cel=$alumno['Celular'];
        $insertaPersona->imagen=$alumno['Foto'];
        $insertaPersona->save();

        //sacar el id_persona del men que acamos de ingresar
        $id=persona::select('id_persona')->where('curp',$insertaPersona->curp)->get()->first();
        $insertaAlumno=new alumno();
        $insertaAlumno->id_persona=$id->id_persona;
        $insertaAlumno->ncontrol=$alumno['No Ctrl'];
        $insertaAlumno->id_carrera=$alumno['ID Carrera'];
        $insertaAlumno->plan_de_estudios=$alumno['Plan de estudios'];
        $insertaAlumno->semestre=$alumno['Semestre'];
        $insertaAlumno->nombre_fam=$alumno['Nombre Familiar'];
        $insertaAlumno->num_tel_fam=$alumno['Num Familiar'];
        $insertaAlumno->password=hash_hmac('sha256', $alumno['Contraseña'], env('HASH_KEY'));
        $insertaAlumno->activo=$alumno['Activo'];
        $insertaAlumno->save();



      //fin foreach
      }
      return redirect()->route('admin_lalumnos');

    }



}
