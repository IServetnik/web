@extends('layouts.app')

@section('content')
    <h1><b class="text-warning">Хокейні</b> ігри</h1>

    <p>Найближчі ігри.</p>

    <div class="row mt-4">
        <div class="col-sm-4">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset('images/hockey/games/NYC.jpeg') }}" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">Каролина - Тампа-Бэй</p>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset('images/hockey/games/colambus.jpeg') }}" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">Коламбус - Баффало</p>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset('images/hockey/games/boston.jpeg') }}" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">Рейнджерс - Бостон</p>
                </div>
            </div>
        </div>
    </div>


    <div class="row mt-4">
        <div class="col-sm-4">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset('images/hockey/games/philadelphia.jpeg') }}" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">Филадельфия - Айлендерс</p>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset('images/hockey/games/edmonton.jpeg') }}" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">Эдмонтон - Сиэтл</p>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset('images/hockey/games/colorado.jpeg') }}" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">Вегас - Колорадо</p>
                </div>
            </div>
        </div>
    </div>
@endsection

