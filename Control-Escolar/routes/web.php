<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login');
})->name('start');

// Route::get('dashboard','DashboarController@index')->name('dashboard');
//
Route::post('/login', 'Auth\LoginController@login')->name('login');
Route::post('/', 'Auth\LoginAdminController@login')->name('loginAdmin');
Route::get('/cerrar_sesion', 'Auth\LoginAdminController@logout')->name('logout');

//Route::get('/asignara','AlumnosController@lista_as')->name('asignara');

// Rutas Admin
Route::group(["prefix" => 'admin'], function(){
  Route::get('/', function(){
    return view('admin.home');
  })->name('admin_home');

//rutas registro de usuarios
Route::post('/registrar','Auth\RegisterController@registro')->name('admin_registrar_envio');

Route::get('/registrar', 'Auth\RegisterController@showForm')->name('admin_registrar');

Route::post('/carreras', 'carrerasController@registro')->name('admin_carreras_registro');

Route::get('/carreras', 'carrerasController@listaCarreras')->name('admin_carreras');

Route::post('/carreras', 'carrerasController@inserta')->name('admin_carreras_registro');

Route::get('/carreras/elimina/{carrera}','carrerasController@elimina')->name('eliminaCarrera');

Route::post('/carreras/editar','carrerasController@editar')->name('edita_carrera');


Route::get('/materias', 'materiasController@showMaterias')->name('admin_materias');

Route::post('/materias','materiasController@registrar')->name('registrar_materia');

Route::get('/materias/elimina/{materia}','materiasController@elimina')->name('eliminaMateria');

  Route::get('/calendario', function(){
    return view('admin.calendario');
  })->name('admin_calendario');

  Route::get('/aulas', 'aulasControler@showAulas')->name('admin_aulas');

  Route::get('/planes', 'planController@showPlan')->name('admin_planes');

  Route::post('/planes', 'planController@registrar')->name('registrar_plan');

  Route::get('/estadisticas', function(){
    return view('admin.estadisticas');
  })->name('admin_estadisticas');

  Route::get('/bitacora', function () {
    return view('admin.bitacora');
  })->name('admin_bitacora');

  Route::get('/datos','adminController@showDatos')->name('mis_datos');

  Route::get('/alumno/eliminar/{ncontrol}', 'AlumnosController@eliminar')
    ->where(["ncontrol"=>'[0-9]+'])
    ->name('eliminaAlumno');

  Route::get('/listas/alumnos', 'AlumnosController@lista')->name('admin_lalumnos');

  Route::get('/listas/profes', 'ProfesoresController@lista')->name('admin_lprofes');

  Route::get('/profe/elimina/{usuario}','ProfesoresController@elimina')->where(['usuario'=>'[A-z]+'])->name('eliminaProfe');

  Route::get('/listas/coordinadores', 'CoordinadorController@lista')->name('admin_lcoordinadores');

  Route::get('/coordinador/elimina/{usuario}','CoordinadorController@elimina')->where(['usuario'=>'[A-z]+'])->name('eliminaCoordinador');



  Route::get('/modificar/usuarios', function(){
    return view('admin.modificar.usuarios');
  })->name('admin_musuarios');

//  Route::get('/asignar/{idg}/{idc}', function(){
//    return view('admin.asignar');
//  })->name('admin_asignar');

Route::get('/asignar/{idg}/{idc}','AlumnosController@lista_as')->name('admin_asignar');
 //Route::get('/asignara','AlumnosController@lista_as')->name('asignara');
  //rutas de grupos
  Route::post('/grupos','gruposController@registroGrupo')->name('admin_registrar_Grupos');

  Route::get('/grupos','gruposController@showFormGrupo')->name('admin_registrarG');
 Route::post('/asig','asignarController@guardar')->name('admin_asignar_grupo');


  Route::get('/listas/grupos','gruposController@showGrupos')->name('admin_lgrupos');

  Route::get('/get_eventos','calendarioController@eventos')->name('get_eventos');

  Route::post('/nuevo_evento','calendarioController@registra_evento')->name('evento_nuevo');
});

//Rutas Docentes
Route::group(["prefix" => 'docente'], function(){
  Route::get('/', function(){
    return view('docente.home');
  })->name('docente_home');

  Route::post('/consulta', 'gruposController@describeGruposProf')->name('docente_consulta');

  Route::post('/calif_finales', 'gruposController@calificacionesFinalesGrupo')->name('docente_calif');

  Route::get('/grupos','gruposController@gruposProf')->name('docente_grupos');

  Route::get('/pdf2', function(){
    $pdf = PDF::loadView('docente.pdfF');
    return $pdf->stream('Calificaciones.pdf');
  })->name('docente_pdfA2');


  Route::get('/pdfC','genPDFController@pdfC')->name('docente_pdfC');

  Route::get('/pdfA','genPDFController@pdfA')->name('docente_pdfA');

  Route::get('/pdfB','genPDFController@pdfB')->name('docente_pdfB');

  Route::get('/pdfF','genPDFController@pdfF')->name('docente_pdfF');

  //calificaciones ordinarias grupo
  Route::get('/pdfA','genPDFController@pdfA_docente')->name('docente_pdfA');
  //calificaciones extraordinarias grupo
  Route::get('/pdfB','genPDFController@pdfB_docente')->name('docente_pdfB');
  //alumnos repetidores grupo
  Route::get('/pdfC','genPDFController@pdfC_docente')->name('docente_pdfC');
  //calificaciones finales grupo
  Route::get('/pdfF','genPDFController@pdfF_docente')->name('docente_pdfF');

});

// Rutas Coordinador
Route::group(["prefix" => 'coordinador'], function(){
  Route::get('/', function(){
    return view('coordinador.home');
  })->name('coordinador_home');

  //calificaciones ordinarias grupo
  Route::get('/pdfA','genPDFController@pdfA_coordi')->name('coordinador_pdfA');
  //calificaciones extraordinarias grupo
  Route::get('/pdfB','genPDFController@pdfB_coordi')->name('coordinador_pdfB');
  //calificaciones finales grupo
  Route::get('/pdfF','genPDFController@pdfF_coordi')->name('coordinador_pdfF');

  //calificaciones ordinarias materia
  Route::get('/pdfAM','genPDFController@pdfAM_coordi')->name('coordinador_pdfAM');
  //calificaciones extraordinarias materia
  Route::get('/pdfBM','genPDFController@pdfBM_coordi')->name('coordinador_pdfBM');
  //calificaciones finales materia
  Route::get('/pdfFM','genPDFController@pdfFM_coordi')->name('coordinador_pdfFM');
});

// Rutas Alumno
Route::group(["prefix" => 'alumno'], function(){
  Route::get('/', function(){
    return view('alumno.home');
  })->name('alumno_home');

  //boleta de calificaciones
  Route::get('/pdfA','genPDFController@pdfA_al')->name('alumno_pdfA');
  //kárdex de calificaciones
  Route::get('/pdfB','genPDFController@pdfB_al')->name('alumno_pdfB');
});


//Route::get('/admin', function () {
//    return view('admin.admin_registro_alumno');
//});

Route::get('/pba', function(){
  return view('admin.modificar.usuarios');
})->name('pba');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
