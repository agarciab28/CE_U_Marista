$(document).ready(function() {
    //Configuración del date picker
    $('.datepicker').datepicker({
        format: 'yyyy-mm-dd',
        setDefaultDate: true,
        defaultDate: new Date(1995, 01, 01),
        i18n: {
            months: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
            monthsShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
            weekdays: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
            weekdaysShort: ['Dom', 'Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab'],
            weekdaysAbbrev: ['D', 'L', 'M', 'M', 'J', 'V', 'S'],
        }
    });

    $('#coor_ext').hide();
    $('#profe_ext').hide();
    $('#alumno_ext').hide();


    // Basic
    $('.dropify').dropify();
    $('.fixed-action-btn').floatingActionButton();
    $('.tooltipped').tooltip();

});

document.addEventListener('DOMContentLoaded', function() {
  var elems = document.querySelectorAll('.fixed-action-btn');
  var instances = M.FloatingActionButton.init(elems, {direction: 'left'});
});

$('#rol').change(function() {
    var x = document.getElementById('rol').value;

    switch (x) {
        case 'alumno':
            $('#coor_ext').hide();
            $('#profe_ext').hide();
            $('#alumno_ext').show();
            break;
        case 'prof':
            $('#coor_ext').hide();
            $('#alumno_ext').hide();
            $('#profe_ext').show();
            break;
        case 'coord':
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
