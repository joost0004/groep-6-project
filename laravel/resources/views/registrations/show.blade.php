@extends ('layout')

@section ('content')

    <form action="/registration">
        <button type="submit" class='button is-link'>Ga terug</button>
    </form>

    <form
        method="POST"
        action="/registration/email"
        class="bg-white p-6 rounded shadow-md" style="width: 300px">
        @csrf
        <button type="submit" class="bg-blue-500 py-2 text-white rounded-full text-sm w-full">
            Send test email
        </button>
    </form>

    <table class="table">
        <thead>
        <tr>
            <td>Voornaam</td>
            <td>Achternaam</td>
            <td>Geslacht</td>
            <td>Postcode</td>
            <td>Adres</td>
            <td>stad</td>
            <td>Verwijzer</td>
            <td>Email</td>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $registration->voornaam }}</td>
                <td>{{ $registration->achternaam }}</td>
                <td>{{ $registration->geslacht }}</td>
                <td>{{ $registration->postcode }}</td>
                <td>{{ $registration->adres }}</td>
                <td>{{ $registration->stad }}</td>
                <td>{{ $registration->verwijzer }}</td>
                <td>{{ $registration->email }}</td>
            </tr>
        </tbody>
    </table>
    <form action="/registration/{{$registration->id}}/edit">
        <button type="submit" class='button is-link'>Aanpassen</button>
    </form>

@endsection
