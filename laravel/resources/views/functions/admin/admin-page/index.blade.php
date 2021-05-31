@extends ('layout')

@section ('content')
    <table class="table">
        <thead>
        <tr>
            <td>Functie</td>
            <td>Voornaam</td>
            <td>Achternaam</td>
            <td>Geslacht</td>
            <td>E-mail</td>
            <td></td>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->function }}</td>
                <td>{{ $user->voornaam }}</td>
                <td>{{ $user->achternaam }}</td>
                <td>{{ $user->geslacht }}</td>
                <td>{{ $user->email }}</td>
                <td>    <form action="/admin/{{$user->id}}">
                        <button class='button is-link' type="submit">Bekijk</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
