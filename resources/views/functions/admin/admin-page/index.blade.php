@extends ('layout')

@section ('content')

<nav class="level">
    <p class=" has-text-centered">
        <div class="field is-grouped">
            <div class="control">
                <form action="/">
                    <button type="submit" class='button is-link'>Ga terug</button>
                </form>
            </div>
        </div>
    </p>
    <p class=" has-text-centered">
        <div class="field is-grouped">
            <div class="control">
                <form action="/admin/create">
                    <button type="submit" class="button is-link">Gebruiker Aanmaken</button>
                </form>
            </div>
        </div>
    </p>
</nav>
<section class="section">
    <table class="table">
        <thead>
        <tr>
            <td>Functie</td>
            <td>Voornaam</td>
            <td>Achternaam</td>
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
                <td>{{ $user->email }}</td>
                <td>    <form action="/admin/{{$user->id}}/edit">
                        <button class='button is-link' type="submit">Bewerken</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
