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
});

// Route::get('dashboard','DashboarController@index')->name('dashboard');
//
Route::post('/login', 'Auth\LoginController@login')->name('login');
Route::post('/', 'Auth\LoginAdminController@login')->name('loginAdmin');

// Rutas Admin
Route::group(["prefix" => 'admin'], function(){
  Route::get('/', function(){
    return view('admin.home');
  })->name('admin_home');

  Route::post('/registrar','Auth\RegisterController@registro')->name('admin_registrar_envio');

  Route::get('/registrar', 'Auth\RegisterController@showForm')->name('admin_registrar');


  Route::get('/grupos', function(){
    return view('admin.grupos');
  })->name('admin_grupos');

  Route::get('/carreras', function(){
    return view('admin.carreras');
  })->name('admin_carreras');

  Route::get('/materias', function(){
    return view('admin.materias');
  })->name('admin_materias');

  Route::get('/calendario', function(){
    return view('admin.calendario');
  })->name('admin_calendario');

  Route::get('/planes', function(){
    return view('admin.planes');
  })->name('admin_planes');

  Route::get('/estadisticas', function(){
    return view('admin.estadisticas');
  })->name('admin_estadisticas');

  Route::get('/listas/alumnos', 'ListaAlumnosController@lista')->name('admin_lalumnos');

  Route::get('/listas/profes', function(){
    return view('admin.listas.profes');
  })->name('admin_lprofes');

  Route::get('/listas/coordinadores', function(){
    return view('admin.listas.coordinadores');
  })->name('admin_lcoordinadores');

  Route::get('/listas/grupos', function(){
    return view('admin.listas.grupos');
  })->name('admin_lgrupos');

  Route::get('/asignar', function(){
    return view('admin.asignar');
  })->name('admin_asignar');
});

//Route::get('/admin', function () {
//    return view('admin.admin_registro_alumno');
//});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
