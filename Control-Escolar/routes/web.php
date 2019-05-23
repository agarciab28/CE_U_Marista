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

Route::get('/ejemplo','graficasController@alumnosCarrera');

// Route::get('dashboard','DashboarController@index')->name('dashboard');
//
Route::post('/login', 'Auth\LoginController@login')->name('login');
Route::post('/', 'Auth\LoginAdminController@login')->name('loginAdmin');
Route::get('/cerrar_sesion', 'Auth\LoginAdminController@logout')->name('logout');

//Route::get('/asignara','AlumnosController@lista_as')->name('asignara');

// Rutas Admin
Route::group(["prefix" => 'admin' , 'middleware'=>'adminlogin'], function(){

  Route::get('/', function(){
    return view('admin.home');
  })->name('admin_home');

  Route::get('/horario', function(){
    return view('admin.horario');
  })->name('admin_horario');

  Route::get('/alumnosGrupo', function(){
    return view('admin.listas.alumnosxgrupo');
  })->name('admin_alumnosGrupo');

  Route::get('/kardexAlumno', function(){
    return view('admin.kardex');
  })->name('admin_kardex');

//rutas registro de usuarios
Route::get('/modificar_alumno/{ida}','AlumnosController@liat_modificar')->name('modificar_alumno');

Route::get('/modificar_coor_lst/{ida}','CoordinadorController@lista_mod')->name('modificar_coor_lst');

Route::post('/modificar_alumnoc/{ida}','AlumnosController@modificar_alu')->name('modificar_alumnoc');

Route::post('/admin_modificar_coordinador/{ida}','CoordinadorController@modificar_coordinador')->name('admin_modificar_coordinador');

Route::get('/modificar_profe/{ida}','ProfesoresController@liat_modificar')->name('modificar_profe');

Route::post('/admin_modificar_profesor/{ida}','ProfesoresController@modificar_profesor')->name('admin_modificar_profesor');

Route::post('/registrar','Auth\RegisterController@registro')->name('admin_registrar_envio');

Route::get('/registrar', 'Auth\RegisterController@showForm')->name('admin_registrar');

Route::post('/carreras', 'carrerasController@registro')->name('admin_carreras_registro');

Route::get('/carreras', 'carrerasController@listaCarreras')->name('admin_carreras');

Route::post('/carreras', 'carrerasController@inserta')->name('admin_carreras_registro');

Route::get('/carreras/elimina/{carrera}','carrerasController@elimina')->name('eliminaCarrera');

Route::post('/carreras/editar','carrerasController@editar')->name('edita_carrera');


Route::get('/materias', 'materiasController@showMaterias')->name('admin_materias');

Route::post('/materias','materiasController@registrar')->name('registrar_materia');

Route::post('/materias/editar' ,'materiasController@modifica')->name('edita_materia');

Route::get('/materias/elimina/{materia}','materiasController@elimina')->name('eliminaMateria');

  Route::get('/calendario', 'calendarioController@showCalendario')->name('admin_calendario');

  Route::post('/calendario/configuracion','calendarioController@modificaConfiguracion')->name('modifica_configuracion');

  Route::get('/aulas', 'aulasControler@showAulas')->name('admin_aulas');

  Route::post('/aulas/registrar','aulasControler@registro')->name('nueva_aula');

  Route::post('/aulas/editar' ,'aulasControler@modifica')->name('edita_aula');

  Route::get('/aulas/elimina/{aula}','aulasControler@elimina')->name('eliminaAula');

  Route::get('/planes', 'planController@showPlan')->name('admin_planes');

  Route::post('planes/editar','planController@editar')->name('edita_plan');

  Route::get('/planes/elimina/{plan}','planController@elimina')->name('eliminaPlan');

  Route::post('/planes', 'planController@registrar')->name('registrar_plan');

  Route::get('/estadisticas','graficasController@show')->name('admin_estadisticas');

  Route::get('/bitacora', 'bitacoraController@listaBitacora')->name('admin_bitacora');

  Route::get('/datos','adminController@showDatos')->name('mis_datos');

  Route::post('/datos','adminController@editar')->name('modifica_datos');

  Route::get('/alumno/eliminar/{ncontrol}', 'AlumnosController@eliminar')
    ->where(["ncontrol"=>'[0-9]+'])
    ->name('eliminaAlumno');

  Route::get('/listas/alumnos', 'AlumnosController@lista')->name('admin_lalumnos');

  Route::get('/listas/profes', 'ProfesoresController@lista')->name('admin_lprofes');

  Route::get('/profe/elimina/{usuario}','ProfesoresController@elimina')->where(['usuario'=>'[A-z]+'])->name('eliminaProfe');

  Route::get('/listas/coordinadores', 'CoordinadorController@lista')->name('admin_lcoordinadores');





  Route::get('/modificar/usuarios', function(){
    return view('admin.modificar.usuarios');
  })->name('admin_musuarios');

  Route::get('/coordinador/elimina/{usuario}','CoordinadorController@elimina')->where(['usuario'=>'[A-z]+'])->name('eliminaCoordinador');

//  Route::get('/asignar/{idg}/{idc}', function(){
//    return view('admin.asignar');
//  })->name('admin_asignar');

  Route::get('/asignar/{idg}/{idc}','AlumnosController@lista_as')->name('admin_asignar');
 //Route::get('/asignara','AlumnosController@lista_as')->name('asignara');
  //rutas de grupos
  Route::post('/grupos','gruposController@registroGrupo')->name('admin_registrar_Grupos');

  Route::get('/grupos','gruposController@showFormGrupo')->name('admin_registrarG');

  Route::post('/asig','asignarController@guardar')->name('admin_asignar_grupo');

  Route::get('/grupos/elimina/{grupo}','gruposController@eliminagrupos')->name('elimina_grupo');

  Route::get('/admin/horarios{idg}','horarioController@showhorarios')->name('admin_show_horarios');

  Route::get('/admin/lista_alumnos/{idg}','gruposController@showlista')->name('admin_show_lista');

  Route::get('/admin/lista/eliminar/{idg}/{ncontrol}','gruposController@eraselista')->name('admin_eliminaral');

  Route::get('/listas/grupos','gruposController@showGrupos')->name('admin_lgrupos');

  Route::get('/get_eventos','calendarioController@eventos')->name('get_eventos');

  Route::post('/grupos/editar' ,'gruposController@modificagrupos')->name('edita_grupo');

  Route::post('/nuevo_evento','calendarioController@registra_evento')->name('evento_nuevo');

  Route::get('/csv','Auth\RegisterController@regAlumnoCSV')->name('regAlumnoCSV');
});

//Rutas Docentes
Route::group(["prefix" => 'docente','middleware'=>'profelogin'], function(){
  Route::get('/', function(){
    return view('docente.home');
  })->name('docente_home');

  Route::get('/misdatos','ProfesoresController@misdatos')->name('docente_datos');

  Route::post('/consulta', 'gruposController@describeGruposProf')->name('docente_consulta');

  Route::post('/actualizaCalificacion','AlumnosController@actualizaCalificacion')->name('actualizaCalificacion');

  Route::post('/calif_finales', 'gruposController@calificacionesFinalesGrupo')->name('docente_calif');

  Route::post('/actualizaFinal','AlumnosController@actualizaFinal')->name('actualizaFinal');

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
Route::group(["prefix" => 'coordinador','middleware'=>'coordinadorlogin'], function(){
  Route::get('/', function(){
    return view('coordinador.home');
  })->name('coordinador_home');

  Route::get('/alumnos', function(){
    return view('coordinador.alumnos');
  })->name('coordinador_alumnos');

  Route::get('/grupos', function(){
    return view('coordinador.grupos');
  })->name('coordinador_grupos');
  Route::get('/misdatos', function(){
    return view('coordinador.misdatos');
  })->name('coordinador_datos');
  //ver los grupos de la carrera
  Route::get('/coordinador/grupos/{idp}','gruposController@grupos_coordinador')->name('lista_grupos_coordinador');
  //calificaciones ordinarias grupo
 //ver mis datos
 Route::get('/coordinador/datos','coordController@showDatos')->name('coord_datos');
 //editar datos
 Route::post('coordinador/datos','coordController@editar')->name('coord_modifica_datos');
 //listar alumnos
 Route::get('coordinador/listas/alumnos/{idp}', 'AlumnosController@listacoord')->name('coord_lista_alumnos');
  //calificaciones - grupo - alumno - persona
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
Route::group(["prefix" => 'alumno','middleware'=>'alumnologin'], function(){
  Route::get('/', function(){
    return view('alumno.home');
  })->name('alumno_home');

  Route::get('/boletas', 'genPDFController@showBoleta')->name('alumno_boletas');

  Route::get('/kardex', function(){
    return view('alumno.kardex');
  })->name('alumno_kardex');

  Route::get('/grupos', function(){
    return view('alumno.grupos');
  })->name('alumno_grupos');

  Route::get('/misdatos', function(){
    return view('alumno.misdatos');
  })->name('alumno_datos');

  //boleta de calificaciones
  Route::get('/pdfA','genPDFController@pdfA_al')->name('alumno_pdfA');
  //ruta horario
  Route::get('/alumno/horario/{idp}','alumnohController@showHorarios')->name('alumno_horario_lgrupos');
  //editar datos
  Route::post('alumno/datos/modifica','alumnController@editar')->name('alumn_modifica_datos');
  //ruta mis datos
  Route::get('/alumno/datos','alumnController@showDatos')->name('alumn_datos');
  //kárdex de calificaciones
  Route::get('/pdfB','genPDFController@pdfB_al')->name('alumno_pdfB');
});


//Route::get('/admin', function () {
//    return view('admin.admin_registro_alumno');
//});

Route::get('/pba', function(){
  return view('admin.modificar.usuarios');
})->name('pba');

/*Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');*/
