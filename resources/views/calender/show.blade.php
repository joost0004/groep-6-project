@extends ('layout')

@section ('content')

    <form action="/events">
        <button type="submit" class='button is-link'>Ga terug</button>
    </form>



    <table class="table">
        <thead>
        <tr>
            <td>Title</td>
            <td>Personen</td>
            <td>Begin datum en tijd</td>
            <td>Eind datum en tijd</td>

        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{ $event->title }}</td>
            <td>{{ $event->ammount }}</td>
            <td>{{ $event->start }}</td>
            <td>{{ $event->end}}</td>

        </tr>
        </tbody>
    </table>
    <p class="has-text-centered">
        <form method="POST" action="/events/{{$event->id}}">
            @csrf
            @method('DELETE')
            <button type="submit" class="button is-link">Afspraak verwijderen</button>
        </form>
    </p>

@endsection
