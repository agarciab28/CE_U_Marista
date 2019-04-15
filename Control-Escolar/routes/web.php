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
//rutas registro de grupos
Route::post('/grupos','Auth\RegisterController@registroG')->name('admin_registrar_Grupos');

Route::get('/grupos', 'Auth\RegisterController@showFormG')->name('admin_registrarG');

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

  Route::get('/listas/alumnos', 'ListaAlumnosController@lista')->name('admin_lalumnos');

  Route::get('/listas/profes', 'ListaProfesoresController@lista')->name('admin_lprofes');

  Route::get('/listas/coordinadores', 'ListaCoordinadorController@lista')->name('admin_lcoordinadores');

  Route::get('/listas/grupos','gruposController@showGrupos')->name('admin_lgrupos');

  Route::get('/modificar/usuarios', function(){
    return view('admin.modificar.usuarios');
  })->name('admin_musuarios');

  Route::get('/asignar', function(){
    return view('admin.asignar');
  })->name('admin_asignar');
});

//Rutas Docentes
Route::group(["prefix" => 'docente'], function(){
  Route::get('/', function(){
    return view('docente.home');
  })->name('docente_home');

  //rutas de grupos
  Route::get('/grupos','Auth\RegisterController@gruposProf')->name('docente_grupos');
});
//Route::get('/admin', function () {
//    return view('admin.admin_registro_alumno');
//});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
