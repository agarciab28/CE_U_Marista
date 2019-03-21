$(document).ready(function(){
  $('.datepicker').datepicker({
    format: 'dd/mm/yyyy',
    setDefaultDate: true,
    defaultDate: new Date(1995, 01, 01),
    i18n: {
      months: ['Enero', 'Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
      monthsShort: ['Ene', 'Feb','Mar','Abr','May','Jun','Jul','Ago','Sep','Oct','Nov','Dic'],
      weekdays: ['Lunes','Martes','Miercoles','Jueves','Viernes','Sábado','Domingo'],
      weekdaysShort: ['Domingo','Lunes','Martes','Miercoles','Jueves','Viernes','Sábado'],
      weekdaysAbbrev: ['D','L','M','M','J','V','S'],
    }
  });
});
