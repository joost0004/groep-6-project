@extends ('layout')

@section ('content')

    <form action="/calender">
        <button type="submit" class='button is-link'>Ga terug</button>
    </form>

    <table class="table">
        <thead>
        <tr>
            <td>Title</td>
            <td>Persons</td>
            <td>Start datum en tijd</td>
            <td>Eind datum en tijd</td>

        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{ $calender->title }}</td>
            <td>{{ $calender->persons }}</td>
            <td>{{ $calender->start }}</td>
            <td>{{ $calender->end}}</td>

        </tr>
        </tbody>
    </table>
    <form action="/calender{{$calender->id}}/edit">
        <button type="submit" class='button is-link'>Afspraak annuleren</button>
        <button type="submit" class='button is-link'>Afspraak wijzigen</button>
    </form>

@endsection
