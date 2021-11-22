@extends('layouts.app')

@section('content')
    <h1><b class="header-highlighted">Футбольні</b> <span class="text-change">ігри</span></h1>

    <p class="text-hide">Найближчі ігри.</p>

    <div class="row mt-4">
        <div class="col-sm-4">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset('images/football/games/dinamo.jpeg') }}" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">Бавария - Динамо Київ</p>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset('images/football/games/m_city.jpeg') }}" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">Ювентус - Челси</p>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset('images/football/games/barcelona.jpeg') }}" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">Бавария - Динамо Київ</p>
                </div>
            </div>
        </div>
    </div>


    <div class="row mt-4">
        <div class="col-sm-4">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset('images/football/games/arsenal.jpeg') }}" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">Бавария - Динамо Київ</p>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset('images/football/games/m_u.jpeg') }}" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">Ювентус - Челси</p>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset('images/football/games/Yuventus.jpeg') }}" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">Ювентус - Челси</p>
                </div>
            </div>
        </div>
    </div>
@endsection

