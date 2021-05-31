@extends ('layout')

@section ('content')
    <table class="table">
        <thead>
        <tr>
            <td>Voornaam</td>
            <td>E-Mail</td>
            <td></td>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
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
