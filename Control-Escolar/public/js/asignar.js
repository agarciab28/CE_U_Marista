$(document).ready(function() {

  //Recargar consulta de profesores en index
    setInterval(cons2,2000);
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
      }

});
