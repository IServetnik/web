@extends('layouts.app')

@section('content')
    <h1><b class="text-success">Футбольні</b> трансфери</h1>


    <div class="mt-5">
        <img src="{{ asset('images/football/transfers/cristina.jpeg') }}" class="img-fluid" alt="...">
        Cristiano
    </div>

    <div class="mt-5">
        <img src="{{ asset('images/football/transfers/messi.jpeg') }}" class="img-fluid" alt="...">
        Messi
    </div>
@endsection

