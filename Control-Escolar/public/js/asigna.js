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
function modificar_materia(id){
  document.getElementById('materia_mod_id').value=id;
}

//Modal para modificar grupo
function modificar_grupo(id){
  document.getElementById('idgrupo').value=id;
}

//Modal para modificar plan de estudios
function modificar_plan(id){
  document.getElementById('mod_plan_id').value=id;
}

//Modal para modificar aulas
function modificar_aula(aula){
  document.getElementById('mod_aula').value=aula;
}

//modificar Alumnos rol,nombres,apaterno,amaterno,fnaci,sexo,email,calle,num_int,num_ext,colonia,codigo_postal,ciudad,estado,num_tel,num_cel,imagen

function modificar_alumno(idp,y){
arr = y.split(";");
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
var sx = "";
if (arr[5]=='M') {
 sx = "Masculino";
}else{
  sx = "Femenino";
}

var select=document.getElementById("sexo");
select.value=arr[5];
(document.getElementById("df_sexo").text = sx).selectedIndex;
//o_sex.text = sx;

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

}
