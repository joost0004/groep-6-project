@extends('layout')

@section('content')
    <h1 style="font-size: 30px; font-weight: bold; text-align: center;">Klant</h1>
<section class="section is-medium">

    <nav class="level">
        <div class="level-item has-text-centered">
            <a href="/calender">
            <div class="box">
                <p class="heading">Agenda</p>
                <img src="/img/agenda-icon.png">
              </div>
            </a>
        </div>
        <div class="level-item has-text-centered">
            <a href="/customer">
            <div class="box">
                <p class="heading">Klanten</p>
                <img src="/img/user-icon.png">
              </div>
            </a>
        </div>
      </nav>
  </section>
@endsection
