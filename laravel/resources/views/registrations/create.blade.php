@extends('layout')
@section('content')


    <div id='wrapper'>
        <div id='page' class='container'>
            <h1 class='has-text-weight-bold is-size-4'>Nieuwe Registratie</h1>

            <form method='POST' action="/registration">
                @csrf

                <div class="mt-4">
                    <x-label for="name" :value="__('Function')"/>

                    <input type="radio" id="customer" name="function" value="customer" checked>
                    <label for="customer">Klant</label><br>
                    <input type="radio" id="werknemer" name="function" value="werknemer">
                    <label for="werknemer">Werknemer</label><br>
                    <input type="radio" id="admin" name="function" value="admin">
                    <label for="admin">Admin</label>
                </div>

                <div class='field'>
                    <label class='label' for='voornaam'>Voornaam</label>

                    <div class='control'>
                        <input
                            class='input @error('voornaam') is-danger @enderror'
                            type='text'
                            name='voornaam'
                            id='voornaam'
                            value='{{old('voornaam')}}'>

                        @error('voornaam')
                        <p class="help is-danger">{{$errors->first('voornaam')}}</p>
                        @enderror
                    </div>
                </div>

                <div class='field'>
                    <label class='label' for='achternaam'>Achternaam</label>

                    <div class='control'>
                        <input
                            class='input @error('achternaam') is-danger @enderror'
                            type='text'
                            name='achternaam'
                            id='achternaam'
                            value='{{old('achternaam')}}'>

                        @error('achternaam')
                        <p class="help is-danger">{{$errors->first('achternaam')}}</p>
                        @enderror
                    </div>
                </div>


                <div class='field'>
                    <label class='label' for='geslacht'>Geslacht</label>

                    <div class='control'>
                        <input
                            class='input @error('geslacht') is-danger @enderror'
                            type='text'
                            name='geslacht'
                            id='geslacht'
                            value='{{old('geslacht')}}'>

                        @error('geslacht')
                        <p class="help is-danger">{{$errors->first('geslacht')}}</p>
                        @enderror
                    </div>
                </div>

                <div class='field'>
                    <label class='label' for='postcode'>Postcode</label>

                    <div class='control'>
                        <input
                            class='input @error('postcode') is-danger @enderror'
                            type='text'
                            name='postcode'
                            id='postcode'
                            value='{{old('postcode')}}'>

                        @error('postcode')
                        <p class="help is-danger">{{$errors->first('postcode')}}</p>
                        @enderror
                    </div>
                </div>

                <div class='field'>
                    <label class='label' for='adres'>Adres</label>

                    <div class='control'>
                        <input
                            class='input @error('adres') is-danger @enderror'
                            type='text'
                            name='adres'
                            id='adres'
                            value='{{old('adres')}}'>

                        @error('adres')
                        <p class="help is-danger">{{$errors->first('adres')}}</p>
                        @enderror
                    </div>
                </div>

                <div class='field'>
                    <label class='label' for='stad'>Stad</label>

                    <div class='control'>
                        <input
                            class='input @error('stad') is-danger @enderror'
                            type='text'
                            name='stad'
                            id='stad'
                            value='{{old('stad')}}'>

                        @error('stad')
                        <p class="help is-danger">{{$errors->first('stad')}}</p>
                        @enderror
                    </div>
                </div>

                <div class='field'>
                    <label class='label' for='verwijzer'>Verwijzer</label>

                    <div class='control'>
                        <input
                            class='input @error('verwijzer') is-danger @enderror'
                            type='text'
                            name='verwijzer'
                            id='verwijzer'
                            value='{{old('verwijzer')}}'>

                        @error('verwijzer')
                        <p class="help is-danger">{{$errors->first('verwijzer')}}</p>
                        @enderror
                    </div>
                </div>

                <div class='field'>
                    <label class='label' for='email'>Email</label>

                    <div class='control'>
                        <input
                            class='input @error('email') is-danger @enderror'
                            type='text'
                            name='email'
                            id='email'
                            value='{{old('email')}}'>

                        @error('email')
                        <p class="help is-danger">{{$errors->first('email')}}</p>
                        @enderror
                    </div>
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-label for="password" :value="__('Password')"/>

                    <x-input id="password" class="block mt-1 w-full"
                             type="password"
                             name="password"
                             required autocomplete="new-password"/>
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-label for="password_confirmation" :value="__('Confirm Password')"/>

                    <x-input id="password_confirmation" class="block mt-1 w-full"
                             type="password"
                             name="password_confirmation" required/>
                </div>


                <div classs='field is-grouped'>
                    <div class="control">
                        <button class='button is-link' type='submit'>Submit</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection
