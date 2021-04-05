@extends('layout')
@section('content')

    <h2>Create a Registration</h2>

    <form method="POST" action="/registration">
        @csrf
        <div class="box">
            <div class="field">
                <label class="label" for="voorletters">Voorletters</label>
                <div class="control">
                    <input class="input @error('voorletters') is-danger @enderror" type="text" name="voorletters" id="voorletters" value="{{ old('voorletters') }}">

                    @error('voorletters')
                    <p class="error">{{ $errors->first('voorletters') }}</p>
                    @enderror
                </div>
            </div>

            <div class="box">
                <div class="field">
                    <label class="label" for="voornaam">Voornaam</label>
                    <div class="control">
                        <input class="input @error('voornaam') is-danger @enderror" type="text" name="voornaam" id="voornaam" value="{{ old('voornaam') }}">

                        @error('voornaam')
                        <p class="error">{{ $errors->first('voornaam') }}</p>
                        @enderror
                    </div>
                </div>


                <div class="box">
                    <div class="field">
                        <label class="label" for="geslacht">Geslacht</label>
                        <div class="control">
                            <input class="input @error('geslacht') is-danger @enderror" type="text" name="geslacht" id="geslacht" value="{{ old('geslacht') }}">

                            @error('geslacht')
                            <p class="error">{{ $errors->first('geslacht') }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="box" >
                        <div class="field">
                            <label class="label" for="adres">Adres</label>
                            <div class="control">
                                <input class="input @error('adres') is-danger @enderror" type="text" name="adres" id="adres" value="{{ old('adres') }}">

                                @error('adres')
                                <p class="error">{{ $errors->first('adres') }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="box" >
                            <div class="field">
                                <label class="label" for="postcode">Postcode</label>
                                <div class="control">
                                    <input class="input @error('postcode') is-danger @enderror" type="text" name="postcode" id="postcode" value="{{ old('postcode') }}">

                                    @error('postcode')
                                    <p class="error">{{ $errors->first('postcode') }}</p>
                                    @enderror
                                </div>
                            </div>


                            <div class="box" >
                                <div class="field">
                                    <label class="label" for="gemeente">Gemeente</label>
                                    <div class="control">
                                        <input class="input @error('gemeente')is-danger @enderror" type="text" name="gemeente" id="gemeente" value="{{ old('gemeente')}}">

                                        @error('gemeente')<p class="error">{{ $errors->first('gemeente')}}</p>
                                        @enderror
                                    </div>
                                </div>


                                <div class="box" >
                                    <div class="field">
                                        <label class="label" for="regio">Regio</label>
                                        <div class="control">
                                            <input class="input @error('regio') is-danger @enderror" type="text" name="regio" id="regio" value="{{ old('regio') }}">

                                            @error('regio')
                                            <p class="error">{{ $errors->first('regio') }}</p>
                                            @enderror
                                        </div>
                                    </div>



                                    <div class="box" >
                                        <div class="field">
                                            <label class="label" for="verwijzer">Verwijzer</label>
                                            <div class="control">
                                                <input class="input @error('verwijzer') is-danger @enderror" type="text" name="verwijzer" id="verwijzer" value="{{ old('verwijzer') }}">

                                                @error('verwijzer')
                                                <p class="error">{{ $errors->first('verwijzer') }}</p>
                                                @enderror
                                            </div>
                                        </div>


            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link" type="submit">Submit</button>
                </div>
            </div>
        </div>

    </form>
@endsection
