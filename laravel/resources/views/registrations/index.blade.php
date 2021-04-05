@extends ('layout')

@section ('content')
    <table class="table">
        <thead>
        <tr>
            <td>Voornaam</td>
            <td>Geslacht</td>
            <td>Verwijzer</td>
            <td></td>
        </tr>
        </thead>
        <tbody>
        @foreach($registrations as $registration)
            <tr>
                <td>{{ $registration->voornaam }}</td>
                <td>{{ $registration->geslacht }}</td>
                <td>{{ $registration->verwijzer }}</td>
                <td>    <form action="/registration/{{$registration->id}}">
                        <button type="submit">Bekijk</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
