
<nav class="navbar navbar-expand-lg bg-body-secondary rounded-4 shadow">
    <div class="container-fluid smallcustomw">
        <a class="navbar-brand" href="/">
            <img src="/img/FunLogo.png" alt="Logo" width="60" height="54" class="d-inline-block align-text-center">
            PiN
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link {{Route::is('welcome') ? "active" : ""}}" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{Route::is('articles.index') ? "active" : ""}}" href="{{route('articles.index')}}">Leggi Articoli</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{Route::is('articles.create') ? "active" : ""}}" href="{{route('articles.create')}}">Posta Articolo</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Tags
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="{{route('tags.index')}}">Lista Tags</a></li>
                      <li><a class="dropdown-item" href="{{route('tags.create')}}">Crea Tag</a></li>
                    </ul>
                  </li>
            </ul>
        </div>
        <div class="logodim"></div>
    </div>
</nav>