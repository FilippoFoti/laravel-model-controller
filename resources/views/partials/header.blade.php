<header class="d-flex align-items-center justify-content-between px-4 mb-4">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid gap-4">
            <figure class="m-0">
                <img src="{{ Vite::asset('resources/img/cs-logo.svg') }}" alt="Logo">
            </figure>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-white" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Movies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Serie TV</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">TV</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Streaming</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
</header>
