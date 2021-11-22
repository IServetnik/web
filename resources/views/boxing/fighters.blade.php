@extends('layouts.app')

@section('content')
    <h1><b class="text-success">Боксери</b></h1>


    <div class="mt-5">
        <img src="{{ asset('images/boxing/fighters/canelo.jpeg') }}" width="100%" class="img-fluid" alt="...">
        Канело Альварес
    </div>

    <div class="mt-5">
        <img src="{{ asset('images/boxing/fighters/usik.jpeg') }}" width="100%" class="img-fluid" alt="...">
        Олександр Усик
    </div>
@endsection

