$(document).ready(function(){
  //Configuración del date picker
  $('.datepicker').datepicker({
    format: 'yyyy-mm-dd',
    setDefaultDate: true,
    defaultDate: new Date(1995, 01, 01),
    i18n: {
      months: ['Enero', 'Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
      monthsShort: ['Ene', 'Feb','Mar','Abr','May','Jun','Jul','Ago','Sep','Oct','Nov','Dic'],
      weekdays: ['Domingo','Lunes','Martes','Miércoles','Jueves','Viernes','Sábado'],
      weekdaysShort: ['Dom','Lun','Mar','Mie','Jue','Vie','Sab'],
      weekdaysAbbrev: ['D','L','M','M','J','V','S'],
    }
  });

  //validaciones




  $('#pb').submit(function(){
    nombre = document.getElementById("nombre").value;
    apellidop = document.getElementById("apellidop").value;
    apellidom = document.getElementById("apellidom").value;
    correo = document.getElementById("correo").value;
    /*calle = document.getElementById("calle").value;
    num_ext = document.getElementById("num_ext").value;
    num_int = document.getElementById("num_int").value;
    colonia = document.getElementById("colonia").value;
    cp = document.getElementById("cp").value;
    ciudad = document.getElementById("ciudad").value;
    estado = document.getElementById("estado").value;
    telefono = document.getElementById("telefono").value;
    celular = document.getElementById("celular").value;*/
      var exp_nom = /^[A-Za-zñÑ-áéíóúÁÉÍÓÚ\s\t-]+$/
      var exp_correo = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/

      if(nombre == "" ||apellidop == ""|| apellidom == ""|| correo == ""|| calle == ""|| num_ext == ""|| num_int == ""|| colonia == ""|| cp == ""|| ciudad  == ""|| estado == ""|| telefono == ""|| celular == ""){
        M.toast({html: 'Existen campos vacios', classes: 'rounded red'});
        //alert("Existen campos vacios");
        return false;
      } else if (!exp_nom.test(nombre)) {
        M.toast({html: 'Formato de nombre incorrecto', classes: 'rounded red'});
        //alert("Formato de nombre incorrecto");
        return false;
      } else if (!exp_nom.test(apellidop)) {
        M.toast({html: 'Formato de apellido paterno incorrecto', classes: 'rounded red'});
        //alert("Formato de apellido paterno incorrecto");
        return false;
      } else if (!exp_nom.test(apellidom)) {
        M.toast({html: 'Formato de apellido materno incorrecto', classes: 'rounded red'});
        //alert("Formato de apellido materno incorrecto");
        return false;
      } else if (!exp_correo.test(correo)) {
        M.toast({html: 'Formato de correo incorrecto', classes: 'rounded red'});
        //alert("Formato de correo incorrecto");
        return false;
      } else if (true) {
        //swal('Registro Exitoso!', 'Presione OK!', 'success');
      }
  });
/*
  $("#nombre").keyup(function() {
    var Max_Length = 5;
    var length = $("#nombre").val().length;
    if (length > Max_Length) {
      $("#nombre").after("<p style='color:red'>the max length of "+Max_Length + " characters is reached, you typed in  " + length + "characters</p>");
    }
  });
*/
$('#coor_ext').hide();
$('#profe_ext').hide();
$('#alumno_ext').hide();
$('#rol').change(function(){
var x = document.getElementById('rol').value;

switch(x){
  case 'Alumno':
  $('#coor_ext').hide();
  $('#profe_ext').hide();
  $('#alumno_ext').show();
  break;
  case 'Profesor':
  $('#coor_ext').hide();
  $('#alumno_ext').hide();
  $('#profe_ext').show();
  break;
  case 'Coordinador':
  $('#profe_ext').hide();
$('#alumno_ext').hide();
  $('#coor_ext').show();
  break;
  default:
  $('#coor_ext').hide();
  $('#profe_ext').hide();
  $('#alumno_ext').hide();
  break;

}


});


});
