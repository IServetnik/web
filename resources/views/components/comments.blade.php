<div class="bg-light" style="margin-top: 50px">
    <div class="container">
        <h3>Коментарi:</h3>

        <div class="mb-5">
            @auth()
                <form action="{{ route('comments.store', $page) }}" method="POST">
                    @csrf

                    <textarea class="form-control" name="text" required></textarea>
                    <button type="submit" class="btn btn-primary mt-1">Написати</button>
                </form>
            @else
                <b><a href="{{ route('register') }}">Зарегеструйтесь</a></b>, щоб написати коментар
            @endauth
        </div>

        @foreach($comments as $comment)
            <div  class="mt-4 bg-white border border-dark rounded">
                <p><b>{{ $comment->user->name }}</b>: {{ $comment->text }}</p>
            </div>
        @endforeach
    </div>
</div>
