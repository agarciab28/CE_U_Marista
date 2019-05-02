$(document).ready(function() {
    var fecha = new Date();
    var yyyy = fecha.getFullYear();
    var mm = fecha.getMonth();
    var dd = fecha.getDate();
    //Configuración del date picker
    $('.datepicker').datepicker({
        format: 'yyyy-mm-dd',
        setDefaultDate: true,
        defaultDate: new Date(yyyy, mm, dd),
        i18n: {
            months: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
            monthsShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
            weekdays: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
            weekdaysShort: ['Dom', 'Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab'],
            weekdaysAbbrev: ['D', 'L', 'M', 'M', 'J', 'V', 'S'],
        }
    });
    
});