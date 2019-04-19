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

// Rutas Admin
Route::group(["prefix" => 'admin'], function(){
  Route::get('/', function(){
    return view('admin.home');
  })->name('admin_home');

//rutas registro de usuarios
Route::post('/registrar','Auth\RegisterController@registro')->name('admin_registrar_envio');

Route::get('/registrar', 'Auth\RegisterController@showForm')->name('admin_registrar');

Route::post('/carreras', 'carrerasController@registro')->name('admin_carreras_registro');

Route::get('/carreras', 'carrerasController@listaGrupos')->name('admin_carreras');

Route::post('/carreras', 'carrerasController@inserta')->name('admin_carreras_registro');


  Route::get('/materias', 'materiasController@showMaterias')->name('admin_materias');

  Route::post('/materias','materiasController@registrar')->name('registrar_materia');

  Route::get('/calendario', function(){
    return view('admin.calendario');
  })->name('admin_calendario');


  Route::get('/planes', 'planController@showPlan')->name('admin_planes');

  Route::post('/planes', 'planController@registrar')->name('registrar_plan');

  Route::get('/estadisticas', function(){
    return view('admin.estadisticas');
  })->name('admin_estadisticas');

  Route::get('/bitacora', function () {
    return view('admin.bitacora');
  })->name('admin_bitacora');

  Route::get('/listas/alumnos', 'AlumnosController@lista')->name('admin_lalumnos');

  Route::get('/listas/profes', 'ProfesoresController@lista')->name('admin_lprofes');

  Route::get('/listas/coordinadores', 'CoordinadorController@lista')->name('admin_lcoordinadores');



  Route::get('/modificar/usuarios', function(){
    return view('admin.modificar.usuarios');
  })->name('admin_musuarios');

  Route::get('/asignar/{idg}/{idc}', function(){
    return view('admin.asignar');
  })->name('admin_asignar');

  //Route::get('filtro','AlumnosController@lista_as');
Route::get('/asignar/{idg}/{idc}','AlumnosController@lista_as')->name('admin_asignar');
  //rutas de grupos
  Route::post('/grupos','gruposController@registroGrupo')->name('admin_registrar_Grupos');

  Route::get('/grupos','gruposController@showFormGrupo')->name('admin_registrarG');



  Route::get('/listas/grupos','gruposController@showGrupos')->name('admin_lgrupos');

  Route::get('/get_eventos','calendarioController@eventos')->name('get_eventos');

  Route::post('/nuevo_evento','calendarioController@registra_evento')->name('evento_nuevo');
});

//Rutas Docentes
Route::group(["prefix" => 'docente'], function(){
  Route::get('/', function(){
    return view('docente.home');
  })->name('docente_home');

  Route::get('/grupos','gruposController@gruposProf')->name('docente_grupos');

  Route::get('/pdf2', function(){
    $pdf = PDF::loadview('docente.pdfA');
    return $pdf->download('Boleta de Calificaciones.pdf');
  })->name('docente_pdfA2');

  Route::get('/pdfA','genPDFController@pdfA')->name('docente_pdfA');

  Route::get('/pdfB','genPDFController@pdfB')->name('docente_pdfB');

  Route::get('/pdfF','genPDFController@pdfF')->name('docente_pdfF');
});
//Route::get('/admin', function () {
//    return view('admin.admin_registro_alumno');
//});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/alumnosxgrupo', function(){
  return view('docente.opciones.alumnos');
})->name('alumnosxgrupo');
