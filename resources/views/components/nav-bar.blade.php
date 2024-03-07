<nav class="navbar navbar-expand-lg navbar-light bg-custom shadow-lg">
    <div class="container">

        <a class="navbar-brand courgette-regular-title" href="/">Presto.it</a>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link courgette-regular" aria-current="page" href="{{route('announcements.index')}}"> Annunci</a>
                </li>

                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle courgette-regular" href="#" id="categoriesDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
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
                        <a class="nav-link dropdown-toggle courgette-regular" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Benvenuto {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            <li class="nav-item ">
                                <form action="{{ route('logout') }}" id="logout-form" method="POST">
                                    @csrf
                                    <button type="submit" class="btn nav-link ms-4 ps-4 alert-dark courgette-regular"> <strong>Logout</strong> </button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Registrati</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>

                @endauth

            </ul>
        </div>
    </div>
</nav>
