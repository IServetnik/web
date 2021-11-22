@extends('layouts.app')

@section('content')
    <h1><b class="text-success">Хокейні</b> гравці</h1>

    <div class="mt-5">
        <img src="{{ asset('images/hockey/players/ovechkin.jpeg') }}" class="img-fluid" width="100%">
        Ovechkin
    </div>

    <div class="mt-5">
        <img src="{{ asset('images/hockey/players/jagr.jpeg') }}" class="img-fluid">
        Jagr
    </div>

    <div class="mt-5">
        <img src="{{ asset('images/hockey/players/crosbi.jpeg') }}" class="img-fluid">
        Crosbi
    </div>
@endsection

