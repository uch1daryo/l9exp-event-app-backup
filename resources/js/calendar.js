import 'bootstrap/dist/css/bootstrap.css';
import 'bootstrap-icons/font/bootstrap-icons.css';

import { Calendar } from '@fullcalendar/core';
import bootstrap5Plugin from '@fullcalendar/bootstrap5';
import dayGridPlugin from '@fullcalendar/daygrid';

let calendarEl = document.getElementById("calendar");
let calendar = new Calendar(calendarEl, {
    plugins: [ bootstrap5Plugin, dayGridPlugin ],
    themeSystem: 'bootstrap5'
});
calendar.render();
