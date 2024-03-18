<nav class="navbar navbar-expand-lg shadow-lg bg-secondary" id="navbar">
    <div class="container">

        <div class="navbar-brand" style="width:14%">
            <a href="/"> <img src="/img/prestoit_logo.png" alt="Logo Presto.it" width="150px"></a>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-nav"
            aria-controls="navbar-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbar-nav">
            <ul class="navbar-nav ms-auto">

                <!-- Annunci -->
                <li class="nav-item">
                    <a class="nav-link  pe-1" aria-current="page"
                        href="{{ route('announcements.index') }}">{{__('ui.Annunci')}}</a>
                </li>

                <!-- Pulsante Aggiungi Annuncio -->
                @auth
                    <li class="nav-item">
                        <a class="nav-link  pe-1" aria-current="page"
                            href="{{ route('announcements.create') }}"><i class="fa-solid fa-circle-plus fa-xl"
                                style="color: #6a50af;"></i></a>
                    </li>
                @endauth

                <!-- Conteggio Messaggi da Revisionare -->
                @if (Auth::user() && Auth::user()->is_revisor)
                    <li class="nav-item me-1">
                        <a class="nav-link  position-relative" aria-turrent="page"
                            href="{{ route('revisor.index') }}">
                            {{__('ui.Revisione')}}
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                {{ App\Models\Announcement::toBeRevisionedCount() }}
                                <span class="visually-hidden">messaggi non letti</span>
                            </span>
                        </a>
                    </li>
                @endif

                <!-- Categorie -->
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle  pe-1" href="#" id="categoriesDropdown"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{__('ui.Categorie')}}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="categoriesDropdown">
                            @foreach ($categories as $category)
                                <li><a class="dropdown-item "
                                        href="{{ route('categoryShow', compact('category')) }}">{{ $category->name }}</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                            @endforeach
                        </ul>
                    </li>

                    <!-- Benvenuto e Logout -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle  pe-1" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            {{__('ui.Benvenuto')}} {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            <li class="nav-item ">
                                <form action="{{ route('logout') }}" id="logout-form" method="POST">
                                    @csrf
                                    <button type="submit" class="btn text-center w-100 "> <strong>{{__('ui.Logout')}}</strong>
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    <!-- Registrati e Accedi -->
                    <li class="nav-item">
                        <a class="nav-link  " href="{{ route('register') }}">{{__('ui.Register')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  " href="{{ route('login') }}">{{__('ui.Login')}}</a>
                    </li>
                @endauth
                @php
                $currentLocale = session('locale', 'it'); // Imposta la lingua corrente come italiano per impostazione predefinita
                @endphp
                
                <!-- Lingue -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{ asset('vendor/blade-flags/language-' . $currentLocale . '.svg') }}" width="25" height="25" />
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="languageDropdown">
                        <li>
                            <x-_locale lang="it"/>
                        </li>
                        <li>
                            <x-_locale lang="es"/>
                        </li>
                        <li>
                            <x-_locale lang="en"/>
                        </li>
                        <!-- Aggiungi altre lingue se necessario -->
                    </ul>
                </li>
                

            <!-- Ricerca -->
            <form action="{{ route('announcements.search') }}" method="GET"
                class="d-flex rounded-pill border border-color overflow-hidden" id="Search">
                <input name="searched" class="form-control  border-0 custom-input" type="search"
                    placeholder="{{__('ui.Search')}}" aria-label="Search">
                <button class="btn-cta  rounded-pill" type="submit"><i
                        class="fa-solid fa-magnifying-glass"></i></button>
            </form>
        </div>
    </div>
</nav>

