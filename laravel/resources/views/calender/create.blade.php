@extends('layout')

@section('content')
{{-- <link href="~bulma-calendar/dist/css/bulma-calendar.min.css" rel="stylesheet">
<script src="~bulma-calendar/dist/js/bulma-calendar.min.js"></script> --}}

<div id='wrapper'>
    <div id='page' class='container'>
        <h1 class='has-text-weight-bold is-size-4'>Nieuwe Afspraak</h1>

<form method='POST' action="/registration">
    @csrf

    <div class='field'>
        <label class='label' for='title'>Titel</label>

        <div class='control'>
        <input
        class='input @error('title') is-danger @enderror'
        type='text'
        name='title'
        id='title'
        value='{{old('title')}}'>

        @error('title')
            <p class="help is-danger">{{$errors->first('title')}}</p>
        @enderror
    </div>
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
