<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('main') }}">Головна</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Футбол
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('pages.index', ['pageCategory' => 'football', 'page' => 'games']) }}">Ігри</a></li>
                        <li><a class="dropdown-item" href="{{ route('pages.index', ['pageCategory' => 'football', 'page' => 'teams']) }}">Команди</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{ route('pages.index', ['pageCategory' => 'football', 'page' => 'transfers']) }}">Трансфери</a></li>
                    </ul>
                </li>


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Хокей
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('pages.index', ['pageCategory' => 'hockey', 'page' => 'games']) }}">Ігри</a></li>
                        <li><a class="dropdown-item" href="{{ route('pages.index', ['pageCategory' => 'hockey', 'page' => 'teams']) }}">Команди</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{ route('pages.index', ['pageCategory' => 'hockey', 'page' => 'players']) }}">Гравці</a></li>
                    </ul>
                </li>


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Бокс
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('pages.index', ['pageCategory' => 'boxing', 'page' => 'fights']) }}">Бої</a></li>
                        <li><a class="dropdown-item" href="{{ route('pages.index', ['pageCategory' => 'boxing', 'page' => 'fighters']) }}">Бійці</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{ route('pages.index', ['pageCategory' => 'boxing', 'page' => 'weights']) }}">Вагові категорії</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('employees') }}">Працівники</a>
                </li>

                @auth()
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('comments.index') }}">Коментарі</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('partners.index') }}">Партнери</a>
                    </li>
                @endauth

                <li class="nav-item dropdown">
                    <div id="time" class="nav-link ml-3">{{ now()->format('Y-m-d H:s') }}</div>
                </li>
            </ul>
        </div>

        @auth()
            <span style="margin-right: 1em">{{ Auth::user()->name }}</span>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Вийти</button>
            </form>
        @else
            <a href="{{ route('login') }}" class="btn btn-outline-dark my-2 my-sm-0" type="submit">Увійти</a>
        @endif

    </div>
</nav>
