@extends('layouts.app')

@section('content')


<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Agendamento de sala</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="post" action="/schedule">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="idroom">Sala :</label>
                <select class="form-control" id="idroom" name="idroom">
                    <?php $rooms = \App\Models\Room::all() ?>
                    @foreach($rooms as $room)
                    <option value="{{$room->idroom}}">{{$room->roomName}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="objective">Motivo da Reunião :</label>
                <input type="text" class="form-control" id="objective" name="objective">
            </div>

            <div class="form-group">
                <label>Data de Agendamento</label>
                <input type="date" class="form-control" id="dateSchedule" name="dateSchedule">
            </div>
            <div class="form-group">
                <label>Hora de Agendamento</label>
                <input type="time" class="form-control" id="timeSchedule" name="timeSchedule">
            </div>
            <div id='calendar'></div>
        </div>
</div>
<div class="card-footer">
    <button type="submit" class="btn btn-primary">Cadastre</button>
</div>
</form>
</div>


@endsection

@push('scripts')
<script type="text/javascript">
    window.onload = function() {

        var events = [

            {
                title: 'Meeting',
                start: '2016-01-12T10:30:00',
                end: '2016-01-12T11:30:00'
            },
            {
                title: 'Meeting',
                start: '2016-01-12T11:30:00',
                end: '2016-01-12T12:30:00'
            },
            {
                title: 'Meeting',
                start: '2016-01-12T12:30:00',
                end: '2016-01-12T13:30:00'
            }
        ];

        $(document).ready(function() {

            // page is now ready, initialize the calendar...

            $('#calendar').fullCalendar({
                // put your options and callbacks here
                lang: 'nl',
                eventLimit: true,
                weekends: true,
                firstDay: 1,
                weekNumbers: true,
                businessHours: {
                    start: '10:00', // a start time (10am in this example)
                    end: '18:00', // an end time (6pm in this example)

                    dow: [1, 2, 3, 4, 5]
                    // days of week. an array of zero-based day of week integers (0=Sunday)
                    // (Monday-Thursday in this example)
                },
                events,
                dayClick: function(date, jsEvent, view) {

                    alert('Clicked on: ' + date.format());

                    alert('Coordinates: ' + jsEvent.pageX + ',' + jsEvent.pageY);

                    alert('Current view: ' + view.name);

                    // change the day's background color just for fun
                    $(this).css('background-color', 'red');

                },
                eventClick: function(calEvent, jsEvent, view) {

                    //                alert('Event: ' + calEvent.title);
                    //                alert('Coordinates: ' + jsEvent.pageX + ',' + jsEvent.pageY);
                    //                alert('View: ' + view.name);

                    console.log('event', calEvent);
                    console.log('jsEvent', jsEvent);
                    console.log('View', view);

                    // change the border color just for fun
                    $(this).css('border-color', 'red');
                }
            });
        });

    };
</script>
@endpush