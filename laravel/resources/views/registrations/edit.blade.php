@extends ('layout')

@section ('content')
<h2>Update a registration</h2>

    <form method="POST" action="/registration/{{ $registration->id }}">
        @csrf
        @method('PUT')

        <div class="field">
            <label class="label" for="question">Voornaam</label>
            <div class="control">
                <input class="input" type="text" name="voornaam" id="voornaam" value="{{ $registration->voornaam}}">
            </div>
        </div>

        <div class="field is-grouped">
            <div class="control">
                <button class="button is-link" type="submit">Submit</button>
            </div>
        </div>

    </form>

    <form method="POST" action="/registration/{{$registration->id}}">
        @csrf
        @method('DELETE')
        <button type="submit" class="button is-link">Delete</button>
    </form>
@endsection
