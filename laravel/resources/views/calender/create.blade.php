@extends('layout')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">

<div id='wrapper'>
    <div id='page' class='container'>
        <h1 class='has-text-weight-bold is-size-4'>Nieuwe Afspraak</h1>

<form method='POST' action="/calender">
    @csrf

    <div class='field'>
        <label class='label' for='title'>Aantal personen</label>

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

    <div class="field">
        <label class='label' for='start'>Start Date</label>

         <div class="control">
             <div class='input-group date @error('start') is-danger @enderror' id='datetimepicker'>
             <input
             type='text'
             class="form-control"
             name="start"
             id="start"
             value="{{old('start')}}">
             <span class="input-group-addon">
               <span class="glyphicon glyphicon-calendar"></span>
             </span>
             </div>
         </div>
         @error('start')
         <p class="help is-danger">{{$errors->first('start')}}</p>
         @enderror
    </div>

    <div class="field">
        <label class='label' for='title'>End Date</label>

        <div class="control">
            <div class='input-group date @error('end') is-danger @enderror' id='datetimepicker2'>
            <input
            type='text'
            class="form-control"
            name="end"
            id="end"
            value="{{old('end')}}">
            <span class="input-group-addon">
              <span class="glyphicon glyphicon-calendar"></span>
            </span>
            </div>
        </div>
        @error('end')
        <p class="help is-danger">{{$errors->first('end')}}</p>
    @enderror
   </div>

   <div class='field'>
    <label class='label' for='ammount'>Aantal personen</label>

    <div class='control'>
    <input
    class='input @error('ammount') is-danger @enderror'
    type='text'
    name='ammount'
    id='ammount'
    value='{{old('ammount')}}'>

    @error('ammount')
        <p class="help is-danger">{{$errors->first('ammount')}}</p>
    @enderror
</div>
</div>

   {{-- <div class="select">
       <select>
           <option id="1" name="ammount" value="1">1</option>
           <option id="2" name="ammount" value="2">2</option>
           <option id="3" name="ammount" value="3">3</option>
           <option id="4" name="ammount" value="4">4</option>
           <option id="5" name="ammount" value="5">5</option>
       </select>
    </div> --}}

    <div classs='field is-grouped'>
        <div class="control">
            <button class='button is-link' type='submit'>Submit</button>
        </div>
    </div>

</form>
</div>
</div>

<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css" rel="stylesheet"/>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.css" rel="stylesheet"/>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.2/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
{{-- <script>
$("#datetimepicker").datetimepicker({
format: 'YYYY-MM-DD HH:mm'
});
$("#datetimepicker2").datetimepicker({
format: 'YYYY-MM-DD HH:mm'
});
</script> --}}
<script type="text/javascript">
    $(function () {
        $('#datetimepicker').datetimepicker({
            format: 'YYYY-MM-DD HH:mm',
            sideBySide: true,
        });
        $('#datetimepicker2').datetimepicker({
    useCurrent: false, //Important! See issue #1075
    format: 'YYYY-MM-DD HH:mm',
    sideBySide: true,
    });
        $("#datetimepicker").on("dp.change", function (e) {
            $('#datetimepicker2').data("DateTimePicker").minDate(e.date);
        });
        $("#datetimepicker2").on("dp.change", function (e) {
            $('#datetimepicker').data("DateTimePicker").maxDate(e.date);
        });
    });
 </script>

@endsection

