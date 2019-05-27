$( document ).ready(function() {
  ocultarBoleta();
});

function mostrarBoleta(){
  $( ".boleta" ).show();
  $( "#btn_pdf" ).show();
}

function ocultarBoleta(){
  $( ".boleta" ).hide();
  $( "#btn_pdf" ).hide();
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
