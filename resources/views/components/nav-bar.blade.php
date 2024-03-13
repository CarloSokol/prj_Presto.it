<nav class="navbar navbar-expand-lg shadow-lg bg-secondary">
    <div class="container">

        <a class="navbar-brand text-primary  courgette-regular-title" href="/">Presto.it</a>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link courgette-regular" aria-current="page" href="{{ route('announcements.index') }}">
                        Annunci</a>
                </li>


                @if (Auth::user() && Auth::user()->is_revisor)
                    <li class="nav-item me-1 ">
                        <a class="nav-link courgette-regular btn btn-outline-success btn-sm position-relative"
                            aria-turrent="page" href="{{ route('revisor.index') }}">
                            Zona revisore
                            <span
                                class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                {{ App\Models\Announcement::toBeRevisionedCount() }}
                                <span class="visually-hidden">messaggi non letti</span>
                            </span>
                        </a>
                    </li>
                @endif

                @auth

                    <li>
                        <a class="nav-link courgette-regular" aria-current="page"
                            href="{{ route('announcements.create') }}">Nuovo
                            Annuncio</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle courgette-regular" href="#" id="categoriesDropdown"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Categorie
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="categoriesDropdown">
                            @foreach ($categories as $category)
                                <li><a class="dropdown-item courgette-regular"
                                        href="{{ route('categoryShow', compact('category')) }}">{{ $category->name }}</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                            @endforeach
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle courgette-regular" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Benvenuto {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            <li class="nav-item ">
                                <form action="{{ route('logout') }}" id="logout-form" method="POST">
                                    @csrf
                                    <button type="submit" class="btn text-center w-100 "> <strong>Logout</strong>
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link  courgette-regular" href="{{ route('register') }}">Registrati</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  courgette-regular" href="{{ route('login') }}">Login</a>
                    </li>

                @endauth



            </ul>
            <form action="{{ route('announcements.search') }}"method="GET" class="d-flex">
                <input name="searched" class="form-controll me-2" type="search" placeholder="search"
                    aria-label="Search">
                <button class="btn btn-outline-success " type="submit">Search</button>
            </form>

        </div>
    </div>
</nav>
