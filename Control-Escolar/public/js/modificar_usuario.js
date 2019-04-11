$('#coor_ext').hide();
$('#profe_ext').hide();
$('#alumno_ext').hide();
$( document ).ready(function() {
  var x = document.getElementById('rol').value;

  switch (x) {
      case 'Alumno':
          $('#coor_ext').hide();
          $('#profe_ext').hide();
          $('#alumno_ext').show();
          break;
      case 'Profesor':
          $('#coor_ext').hide();
          $('#alumno_ext').hide();
          $('#profe_ext').show();
          break;
      case 'Coordinador':
          $('#profe_ext').hide();
          $('#alumno_ext').hide();
          $('#coor_ext').show();
          break;
      default:
          $('#coor_ext').hide();
          $('#profe_ext').hide();
          $('#alumno_ext').hide();
          break;

  }
});
