//Modal para profesores
function abreModal(id){
  var x=document.getElementsByName('id_grupo');
  for (var i = 0; i < x.length; i++) {
    x[i].value=id;
  }
}

//Modal para modificar carreras
function modificar_carrera(id){
  var x=document.getElementById('mod_idcarrera');
  x.value=id;
}

//Modal para modificar materia
function modificar_carrera(id){
  var x=document.getElementById('mod_idcarrera');
  x.value=id;
}

//modificar Alumnos rol,nombres,apaterno,amaterno,fnaci,sexo,email,calle,num_int,num_ext,colonia,codigo_postal,ciudad,estado,num_tel,num_cel,imagen

function modificar_alumno(idp,y){
arr = y.split(";");
alert(arr[10]);
var x=document.getElementById('nombre');
x.value=arr[1];
var x=document.getElementById('apellidop');
x.value=arr[2];
var x=document.getElementById('apellidom');
x.value=arr[3];
var x=document.getElementById('correo');
x.value=arr[4];
//var x=document.getElementById('sexo');
//x.value=arr[5];

var select = document.getElementById("sexo");
select.options[select.options.length] = new Option('Text 1', 'F');

var x=document.getElementById('fecha1');
x.value=arr[6];
var x=document.getElementById('curp');
x.value=arr[7];
var x=document.getElementById('ncontrol');
x.value=arr[8];
var x=document.getElementById('carrera_alumno');
x.value=arr[9];
//var x=document.getElementById('semestre');
//x.value=arr[10];
document.getElementById("semestre").value = arr[10];
//document.getElementById("semestre").selectedIndex = arr[10];

var x=document.getElementById('plan_est');
x.value=arr[11];
$(function(){
    $("#sexo").val(arr[5]);
});
}
