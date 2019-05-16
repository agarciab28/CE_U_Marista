
$( document ).ready(function() {
    mostrarLunes();
});

function mostrarLunes(){
  $( "#horario_lunes" ).show();
  $( "#horario_martes" ).hide();
  $( "#horario_miercoles" ).hide();
  $( "#horario_jueves" ).hide();
  $( "#horario_viernes" ).hide();
  $( "#horario_sabado" ).hide();
}

function mostarMartes(){
  $( "#horario_lunes" ).hide();
  $( "#horario_martes" ).show();
  $( "#horario_miercoles" ).hide();
  $( "#horario_jueves" ).hide();
  $( "#horario_viernes" ).hide();
  $( "#horario_sabado" ).hide();
}

function mostrarMiercoles(){
  $( "#horario_lunes" ).hide();
  $( "#horario_martes" ).hide();
  $( "#horario_miercoles" ).show();
  $( "#horario_jueves" ).hide();
  $( "#horario_viernes" ).hide();
  $( "#horario_sabado" ).hide();
}

function mostrarJueves(){
  $( "#horario_lunes" ).hide();
  $( "#horario_martes" ).hide();
  $( "#horario_miercoles" ).hide();
  $( "#horario_jueves" ).show();
  $( "#horario_viernes" ).hide();
  $( "#horario_sabado" ).hide();
}

function mostrarViernes(){
  $( "#horario_lunes" ).hide();
  $( "#horario_martes" ).hide();
  $( "#horario_miercoles" ).hide();
  $( "#horario_jueves" ).hide();
  $( "#horario_viernes" ).show();
  $( "#horario_sabado" ).hide();
}

function mostrarSabado(){
  $( "#horario_lunes" ).hide();
  $( "#horario_martes" ).hide();
  $( "#horario_miercoles" ).hide();
  $( "#horario_jueves" ).hide();
  $( "#horario_viernes" ).hide();
  $( "#horario_sabado" ).show();
}

$( ".card-materia" ).hover(function() {
  $(this).addClass("z-depth-4");
},
function(){
  $(this).removeClass("z-depth-4");
});
