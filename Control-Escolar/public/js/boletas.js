$( document ).ready(function() {
  ocultarBoleta();
});

function mostrarBoleta(){
  $( "#boleta" ).show();
}

function ocultarBoleta(){
  $( "#boleta" ).hide();
}

$('#sel_materia').change(function(){
    var value = $(this).val();
    if (value == 1) {
      mostrarBoleta();
    }
    else {
      ocultarBoleta();
    }
});
