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
Route::post('/', 'Auth\LoginController@loginAdmin')->name('loginAdmin');

// Route::post('/admin/registroP','Auth\RegisterController@registro')->name('registro_persona');
//
// Route::get('/admin/registro', function () {
//     return view('admin.registro_persona');
// });
//
// Route::get('/admin/inicio', function () {
//     return view('admin.dashboard');
// });

// Rutas Admin
Route::get('/admin', function(){
  return view('admin.home');
});

Route::get('/admin/registrar', function(){
  return view('admin.registrar');
});

Route::get('/admin/usuarios', function(){
  return view('admin.usuarios');
});

Route::get('/admin/buscar', function(){
  return view('admin.buscar');
});

Route::get('/admin/buscar/ver', function(){
  return view('admin.ver');
});

Route::get('/admin/estadisticas', function(){
  return view('admin.estadisticas');
});

//Route::get('/admin', function () {
//    return view('admin.admin_registro_alumno');
//});
