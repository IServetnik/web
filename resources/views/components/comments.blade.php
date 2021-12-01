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
                <b><a href="{{ route('register') }}">Зареєструйтесь</a></b>, щоб написати коментар і ставити лайки/дізлайки
            @endauth
        </div>

        @foreach($comments as $comment)
            <div  class="mt-4 bg-white border border-dark rounded">
                <p><b>{{ $comment->user->name }}</b>: {{ $comment->text }}</p>
            </div>

            <div>
                {{ $comment->created_at->format('Y-m-d H:i') }}
            </div>

            @auth()
                <div>
                    <form action="{{ route('ratings.like', $comment) }}" method="POST" class="d-inline rating-form" data-type="like">
                        @csrf
                        <button type="submit" class="btn btn-sm btn-success" @if($comment->likes()->where('user_id', Auth::id())->exists()) disabled @endif>Лайк (<span class="likes-count">{{ $comment->likes_count }}</span>)</button>
                    </form>

                    <form action="{{ route('ratings.dislike', $comment) }}" method="POST" class="d-inline rating-form" data-type="dislike">
                        @csrf
                        <button class="btn btn-sm btn-danger"  @if($comment->dislikes()->where('user_id', Auth::id())->exists()) disabled @endif>Дизлайк (<span class="dislikes-count">{{ $comment->dislikes_count }}</span>)</button>
                    </form>
                </div>
            @endauth
        @endforeach
    </div>
</div>
