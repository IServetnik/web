@extends('layouts.app')

@section('content')
    <h1>Коментарі ({{ $count }})</h1>

    <table class="table mt-5" id="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Текст</th>
            <th scope="col">Сторінка</th>
            <th scope="col">Користувач</th>
            <th scope="col">Лайки</th>
            <th scope="col">Дизлайки</th>
        </tr>
        </thead>
        <tbody>
        @foreach($comments as $comment)
            <tr>
                <th scope="row">{{ $comment['id'] }}</th>
                <td>{{ $comment['text'] }}</td>
                <td><a href="{{ route('pages.index', [
                    'pageCategory' => $comment['page']['category']['name'],
                    'page' => $comment['page']['name'],
                ]) }}">Перейти</a></td>
                <td>{{ $comment['user']['name'] }}</td>
                <td>{{ $comment['likes_count'] }}</td>
                <td>{{ $comment['dislikes_count'] }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
