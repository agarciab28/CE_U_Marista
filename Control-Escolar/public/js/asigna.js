function abreModal(id){
  var x=document.getElementsByName('id_grupo');
  for (var i = 0; i < x.length; i++) {
    x[i].value=id;
  }


}
