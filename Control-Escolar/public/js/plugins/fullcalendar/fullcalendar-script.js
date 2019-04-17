
  $(document).ready(function() {
    /* initialize the external events
    -----------------------------------------------------------------*/
    $('#external-events .fc-event').each(function() {

      // store data so the calendar knows to render an event upon drop
      $(this).data('event', {
        title: $.trim($(this).text()), // use the element's text as the event title
        stick: true, // maintain when user navigates (see docs on the renderEvent method)
        color: '#00bcd4'
      });

      // make the event draggable using jQuery UI
      $(this).draggable({
        zIndex: 999,
        revert: true,      // will cause the event to go back to its
        revertDuration: 0  //  original position after the drag
      });

    });

    

    /* initialize the calendar
    -----------------------------------------------------------------*/
    var fecha = new Date();
    var dd = fecha.getFullYear();
    var mm = fecha.getMonth()+1;
    var yyyy = fecha.getDate();
    $fecha =  dd + "-" + mm + "-" + yyyy;
    $('#calendar').fullCalendar({
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,basicWeek,basicDay'
      },
      defaultDate: $fecha,
      editable: true,
      droppable: true, // this allows things to be dropped onto the calendar
      eventLimit: true, // allow "more" link when too many events
      events: [
        {
          title: 'All Day Event',
          start: '2019-04-01',
          color: '#9c27b0'
        },
        {
          title: 'Periodo actual',
          start: '2019-01-07',
          end: '2019-05-10',
          color: '#e91e63'
        }
      ]
    });
    
  });