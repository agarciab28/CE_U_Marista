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
