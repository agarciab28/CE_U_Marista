//Modal para profesores
function abreModal(id){
  var x=document.getElementsByName('id_grupo');
  for (var i = 0; i < x.length; i++) {
    x[i].value=id;
  }
}

//Modal para modificar carreras
function modificar_carrera(id){

arr = id.split(';');

  var x=document.getElementById('mod_idcarrera');
  x.value=arr[0];
  var x=document.getElementById('mod_nombrec');
  x.value=arr[1];
  var x=document.getElementById('mod_creditos');
  x.value=arr[2];
  var x=document.getElementById('mod_cvervoe');
  x.value=arr[3];
  var x=document.getElementById('mod_fechar');
  x.value=arr[4];




}

//Modal para modificar materia
function modificar_materia(id){
  arr = id.split(';');
  document.getElementById('materia_mod_id').value=arr[0];
    document.getElementById('mod_nombrec').value=arr[1];
      document.getElementById('mod_plan').value=arr[2];
        document.getElementById('mod_materiasm').value=arr[3];
          document.getElementById('plan_act').innerHTML=arr[4];

}

//Modal para modificar grupo
function modificar_grupo(id){
a = id.split(';');

  document.getElementById('idgrupo').value=a[0];
    document.getElementById('seccion').value=a[1];
          document.getElementById('carr_spn').innerHTML=a[2];
      document.getElementById('carrera').value=a[3];
          document.getElementById('mat_spn').innerHTML=a[4];
        document.getElementById('materia').value=a[5];
                document.getElementById('prf_spn').innerHTML=a[6];
          document.getElementById('profesor').value=a[7];
            document.getElementById('periodo').value=a[8];
}

//Modal para modificar plan de estudios
function modificar_plan(id){
arr = id.split(';');
  document.getElementById('mod_plan_id').value=arr[0];
    document.getElementById('mod_nombrec').value=arr[1];
      document.getElementById('mod_carrera').value=arr[2];
        document.getElementById('mod_fecha').value=arr[3];
         document.getElementById('car_act').innerHTML=arr[4];
}

//Modal para modificar aulas
function modificar_aula(aula){
  arr = aula.split(';');
  document.getElementById('mod_aula').value=arr[0];
    document.getElementById('mod_edificio').value=arr[1];
      document.getElementById('mod_tipo').value=arr[2];
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
