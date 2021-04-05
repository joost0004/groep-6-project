@extends ('layout')

@section ('content')
    <table class="table">
        <thead>
        <tr>
            <td>Voornaam</td>
            <td>Geslacht</td>
            <td>Adres</td>
            <td>Postcode</td>
            <td>Gemeente</td>
            <td>Regio</td>
            <td>Verwijzer</td>
            <td>Partner</td>
            <td>Kind</td>
            <td>Linnen</td>
            <td>Speelgoed</td>
            <td>Volwassen</td>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $registration->voornaam }}</td>
                <td>{{ $registration->geslacht }}</td>
                <td>{{ $registration->adres }}</td>
                <td>{{ $registration->postcode }}</td>
                <td>{{ $registration->gemeente }}</td>
                <td>{{ $registration->regio }}</td>
                <td>{{ $registration->verwijzer }}</td>
                <td>{{ $registration->partner }}</td>
                <td>{{ $registration->kind }}</td>
                <td>{{ $registration->linnen }}</td>
                <td>{{ $registration->speelgoed }}</td>
                <td>{{ $registration->volwassen }}</td>
            </tr>
        </tbody>
    </table>
    <form action="/registration/{{$registration->id}}/edit">
        <button type="submit">Aanpassen</button>
    </form>
@endsection
