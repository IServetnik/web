@extends('layouts.app')

@section('content')
    <h1><b class="text-warning">Бої</b> з боксу</h1>

    <div class="row mt-4">
        <div class="col-sm-4">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset('images/boxing/fights/usik.jpeg') }}" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">Усик - Джошуа</p>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset('images/boxing/fights/tajson.jpeg') }}" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">Тайсое Фьюри - Деонтей Уайлдер</p>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset('images/boxing/fights/packao.jpeg') }}" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">Мейвейзер - Пакао</p>
                </div>
            </div>
        </div>
    </div>
@endsection

