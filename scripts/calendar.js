
document.addEventListener('DOMContentLoaded', function() {
  var calendarEl = document.getElementById('calendar');
  var calendar = new FullCalendar.Calendar(calendarEl, {
    initialView: 'dayGridMonth',
    events: events,
    eventClick: function(info){
      window.location.href="/weave/view/task-detail.php?id=" + info.event.id;
    }
  });
    calendar.render();
    calendar.on('dateClick', function(info) {
        window.location.href="/weave/view/task-list.php?date=" + info.dateStr;  
    })
  });