$(document).ready(function(){
  $('.datepicker').datepicker({
    format: 'yyyy-mm-dd',
    setDefaultDate: true,
    defaultDate: new Date(1995, 01, 01),
    i18n: {
      months: ['Enero', 'Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
      monthsShort: ['Ene', 'Feb','Mar','Abr','May','Jun','Jul','Ago','Sep','Oct','Nov','Dic'],
      weekdays: ['Domingo','Lunes','Martes','Miercoles','Jueves','Viernes','Sábado'],
      weekdaysShort: ['Dom','Lun','Mar','Mie','Jue','Vie','Sab'],
      weekdaysAbbrev: ['D','L','M','M','J','V','S'],
    }
  });
});

//validaciones

$('#registrar').click(function(){
  alert("##");
});
function val(){
  var nombre, variables, exp;

  nombre = document.getElementById("nombre").value;
  apellidop = document.getElementById("apellidop").value;
  apellidom = document.getElementById("apellidom").value;
  correo = document.getElementById("correo").value;
  fecha = document.getElementById("fecha1").value;
  calle = document.getElementById("calle").value;
  num_ext = document.getElementById("num_ext").value;
  num_int = document.getElementById("num_int").value;
  colonia = document.getElementById("colonia").value;
  cp = document.getElementById("cp").value;
  ciudad = document.getElementById("ciudad").value;
  estado = document.getElementById("estado").value;
  telefono = document.getElementById("telefono").value;
  celular = document.getElementById("celular").value;
  pass = document.getElementById("pass").value;
alert(fecha);
  var exp_nom = /^[A-Za-zñÑ-áéíóúÁÉÍÓÚ\s\t-]+$/
  var exp_correo = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/

  if(nombre == "" ||apellidop == ""|| apellidom == ""|| correo == ""|| fecha == ""|| calle == ""|| num_ext == ""|| num_int == ""|| colonia == ""|| cp == ""|| ciudad  == ""|| estado == ""|| telefono == ""|| celular == ""|| pass== ""){
    alert("Existen campos vacios");
    return false;
  } else if (!exp_nom.test(nombre)) {
    alert("Formato de nombre incorrecto");
    return false;
  } else if (!exp_nom.test(apellidop)) {
    alert("Formato de apellido paterno incorrecto");
    return false;
  } else if (!exp_nom.test(apellidom)) {
    alert("Formato de apellido materno incorrecto");
    return false;
  } else if (!exp_correo.test(correo)) {
    alert("Formato de correo incorrecto");
    return false;
  }
}
