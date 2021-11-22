@extends('layouts.app')

@section('content')
    <h1>Вагові категорії в <b class="title">боксі</b></h1>

    <table class="table mt-5" id="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Назва</th>
            <th scope="col">Вага в кг</th>
            <th scope="col">Вага в фунтах</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Важка вага</td>
            <td>90,72+</td>
            <td>200+</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Перша важка вага</td>
            <td>90,72</td>
            <td>200</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Напівважка вага</td>
            <td>79,4</td>
            <td>175</td>
        </tr>
        <tr>
            <th scope="row">4</th>
            <td>Друга середня вага</td>
            <td>76,2</td>
            <td>168</td>
        </tr>
        <tr>
            <th scope="row">5</th>
            <td>Середня вага</td>
            <td>72,6</td>
            <td>160</td>
        </tr>
        <tr>
            <th scope="row">6</th>
            <td>Перша середня вага</td>
            <td>69,9</td>
            <td>154</td>
        </tr>
        <tr>
            <th scope="row">7</th>
            <td>Перша середня вага</td>
            <td>66,7</td>
            <td>147</td>
        </tr>
        <tr>
            <th scope="row">8</th>
            <td>Легка вага</td>
            <td>61,2</td>
            <td>135</td>
        </tr>
        <tr>
            <th scope="row">9</th>
            <td>Друга напівлегка вага</td>
            <td>59,0</td>
            <td>130</td>
        </tr>
        <tr>
            <th scope="row">10</th>
            <td>Напівлегка вага	</td>
            <td>57,2</td>
            <td>126</td>
        </tr>
        <tr>
            <th scope="row">11</th>
            <td>Друга легша вага</td>
            <td>55,3</td>
            <td>122</td>
        </tr>
        </tbody>
    </table>
@endsection

