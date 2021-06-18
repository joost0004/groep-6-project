<!DOCTYPE html>
<html>
<head>
    <title>Kledingbank Zeeland agenda</title>

    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>
</head>
<body>

<div class="container">

    <section class="section">
    <nav class="level">
        <p class="level-item has-text-centered">
            <button class="button" onclick='location.href="/"'>Terug</button>
        </p>
        <p class="level-item has-text-centered">
            <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
        </p>
        <p class="level-item has-text-centered">
            <button class="button" onclick='location.href="/events/create"'>Afspraak maken</button>
          </p>

      </nav>
      <section class="section">




    <div id="calendar"></div>

</div>

<script>

    $(document).ready(function () {

        $.ajaxSetup({
            headers:{
                'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#calendar').fullCalendar({
            editable:true,
            header:{
                left:'prev,next today',
                center:'title',
                right:'month,agendaWeek,agendaDay'
            },
            events:'/events',

            eventClick:function(event)
            {
                var id = event.id;
                window.location.href=`/events/${id}`
            }
        });
    });

</script>

</body>
</html>
