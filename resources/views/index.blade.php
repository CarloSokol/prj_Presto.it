<x-layout>

    <x-nav-bar />

    <div class="container-fluid p-0 shadow" style="position:relative;">
        <img src="{{ asset('img/cover.jpg') }}" alt="Hero Presto"
            style="width:100%;height:auto;aspect-ratio:16/9;max-height:700px;">
        @auth
            <div style="position:absolute; top:50%; right:50%; transform:translateY(-50%) translateX(50%);">
                <a class="active btn btn-outline-light text-white text-uppercase fw-bold btn-cta"
                    style="background-color:#f0a774" aria-current="page" href="{{ route('announcements.create') }}">Nuovo
                    Annuncio</a>
            </div>
        @endauth
    </div>

    <div class="container mt-4">
        <h1 class="mb-4">Le nostre forniture</h1>
        <h4 class="mb-4">Trova prodotti di qualità a prezzi convenienti solo su Presto.it</h4>
    </div>

    <section style="background-color: #ffffff; height: 400px;">
        <div class="container">
        </div>
    </section>

    <div class="container">

        {{-- <section style="background-color: #ffffff;  height: 200px; width: 100%; z-index: -100;">
                <div class="container">
                </div>
            </section> --}}

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">

            @foreach ($announcements as $annuncio)
                <div class="col mb-4">
                    <div class="card text-center border rounded-5 equal-height-card">
                        
                        <div class="card-body">
                            <h5 class="card-title text-center fs-3">{{ $annuncio->title }}</h5>
                            <img src="https://picsum.photos/id/27/300/200" class="img-fluid p-1  rounded-5"
                                alt="...">
                            <div class=" border-2 mb-2 mt-2 ">
                                <p class="card-text"> {{ $annuncio->body }}</p>
                                <p class="card-text">Categoria: <strong> {{ $annuncio->category->name }} </strong></p>
                                <p class="card-text">Prezzo: <strong>{{ $annuncio->price }} €</strong></p>
                            </div>
                            @php
                                $diffInHours = now()->diffInHours($annuncio->created_at);

                                $hourString = $diffInHours > 1 ? 'ore' : 'ora';

                                $timeElapsed =
                                    $diffInHours < 1 ? 'Meno di un ora fa' : $diffInHours . ' ' . $hourString;
                            @endphp
                            <div class="text-muted border-2">
                                Data di creazione: {{ $timeElapsed }}
                            </div>
                            <a href="" class="btn btn-outline-primary">Per saperne di più</a>
                        </div>
                    </div>
                </div>
            @endforeach

            <div class="container" style="background-color: #ffffff; height: 200px; width: 100%;">
            </div>
            
        </div>
    </div>

    <x-footer />
</x-layout>
