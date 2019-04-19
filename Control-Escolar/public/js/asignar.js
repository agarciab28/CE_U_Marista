$(document).ready(function() {
/*
  $.ajax({
      url:"filtro",
      method: "GET",
      dataType:"text",
      success: function (data) {
       const contenido=document.getElementById('cont_t');
       contenido.innerHTML=data;
      }
  });*/

var URLactual = window.location.href;
var res = URLactual.split("/");
res=res[res.length-1];
alert(res);

$.ajax({
    url:"admin_asignar",
    method: "GET",
    dataType:"text",
    success: function (data) {
     const contenido=document.getElementById('wea');
     contenido.innerHTML=data;
    }
});
  //Recargar consulta de profesores en index
/*    setInterval(cons2,2000);
      function cons2 (){
        $.ajax({
            url:"filtro",
            method: "GET",
            dataType:"text",
            success: function (data) {
             const contenido=document.getElementById('wea');
             contenido.innerHTML=data;
            }
        });
      }*/

});
