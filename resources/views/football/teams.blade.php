@extends('layouts.app')

@section('content')
    <h1><b class="text-danger">Футбольні</b> команди</h1>

    <p>За результатами голосування читачів офіційного журналу <i>ФІФА</i>, проведеного в грудні 2000 року. <br>
        Відсоток людей, які дали свій голос за клуб, як за найкращий.</p>

    <table class="table table-hover mt-5">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Клуб</th>
            <th scope="col">Крааїна</th>
            <th scope="col">%</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Реал Мадрид</td>
            <td>Іспанія</td>
            <td>42,35</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Манчестер Юнайтед</td>
            <td>Англія</td>
            <td>9,69</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Бавария</td>
            <td>Німеччина</td>
            <td>8,18</td>
        </tr>

        <tr>
            <th scope="row">4</th>
            <td>Барселона</td>
            <td>Іспанія</td>
            <td>5,61</td>
        </tr>

        <tr>
            <th scope="row">5</th>
            <td>Сантос</td>
            <td>Бразилія</td>
            <td>5,10</td>
        </tr>
        </tbody>
    </table>
@endsection
