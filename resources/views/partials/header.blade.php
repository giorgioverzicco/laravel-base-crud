<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Comics</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('comics.index') ? 'active' : '' }}" aria-current="page" href="/">Comics</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('comics.create') ? 'active' : '' }}" href="{{ route('comics.create') }}">Crea un Fumetto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
