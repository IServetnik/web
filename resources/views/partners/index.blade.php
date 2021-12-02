@extends('layouts.app')

@section('content')
    <h1>Партнери</h1>

    <table class="table mt-5" id="table">
        <thead>
        <tr>
            <th scope="col">Ім'я</th>
            <th scope="col">Приналежність</th>
            <th scope="col">Звання</th>
            <th scope="col">Розташування</th>
        </tr>
        </thead>

        <tbody>

        @foreach($groupedPartners as $group)
            @foreach($group as $partner)
                <tr>
                    <th scope="row">{{ $partner['name'] }}</th>
                    <td>{{ $partner['affiliation'] }}</td>
                    <td>{{ $partner['rank'] }}</td>
                    <td>{{ $partner['location'] }}</td>
                </tr>

                @if(($loop->last) && ($loop->parent->last == false))
                    <tr height="40px">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                @endif
            @endforeach
        @endforeach
        </tbody>
    </table>
@endsection
