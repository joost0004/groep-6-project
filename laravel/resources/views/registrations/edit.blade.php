@extends ('layout')

@section ('content')


    <form method="POST" action="/registration/{{ $registration->id }}">
        @csrf
        @method('PUT')

        <div class="field">
            <label class="label" for="voornaam">Voornaam</label>
            <div class="control">
                <input class="input" type="text" name="voornaam" id="voornaam" value="{{ $registration->voornaam}}">
            </div>
        </div>

        <div class="field">
            <label class="label" for="achternaam">Achternaam</label>
            <div class="control">
                <input class="input" type="text" name="achternaam" id="achternaam" value="{{ $registration->achternaam}}">
            </div>
        </div>

        <div class='field'>
            <label class='label' for='geslacht'>Geslacht</label>

        <div class="mt-4">
            <input type="radio" id="man" name="geslacht" value="man" @if ($registration->geslacht === 'man')
                checked
            @endif>
            <label for="man">Man</label><br>
            <input type="radio" id="vrouw" name="geslacht" value="vrouw" @if ($registration->geslacht === 'vrouw')
            checked
        @endif>
            <label for="vrouw">Vrouw</label><br>
        </div>
        </div>

        <div class="field">
            <label class="label" for="postcode">Postcode</label>
            <div class="control">
                <input class="input" type="text" name="postcode" id="postcode" value="{{ $registration->postcode}}">
            </div>
        </div>

        <div class="field">
            <label class="label" for="adres">Adres</label>
            <div class="control">
                <input class="input" type="text" name="adres" id="adres" value="{{ $registration->adres}}">
            </div>
        </div>

        <div class="field">
            <label class="label" for="stad">Stad</label>
            <div class="control">
                <input class="input" type="text" name="stad" id="stad" value="{{ $registration->stad}}">
            </div>
        </div>

        <div class="field">
            <label class="label" for="verwijzer">Verwijzer</label>
            <div class="control">
                <input class="input" type="text" name="verwijzer" id="verwijzer" value="{{ $registration->verwijzer}}">
            </div>
        </div>

        <div class="field">
            <label class="label" for="email">Email</label>
            <div class="control">
                <input class="input" type="text" name="email" id="email" value="{{ $registration->email}}">
            </div>
        </div>



        <section class="section">
            <nav class="level">
                <p class=" has-text-centered">
                    <div class="field is-grouped">
                        <div class="control">
                            <button class="button is-link" type="submit">Submit</button>
                        </div>
                    </div>
                </p>



    </form>

                <p class=" has-text-centered">
                    <form method="POST" action="/registration/{{$registration->id}}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="button is-link">Delete</button>
                    </form>
                </p>
            </nav>
@endsection
