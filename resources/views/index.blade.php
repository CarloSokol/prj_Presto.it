<x-layout>

    <x-nav-bar />

    <div class="container-fluid p-0 shadow"
        style="position:relative;">
        <img src="{{ asset('img/cover.jpg') }}" alt="Hero Presto" style="width:100%;height:auto;aspect-ratio:16/9;max-height:700px;">
        @auth
            <div style="position:absolute; top:50%; right:50%; transform:translateY(-50%) translateX(50%);">
                <a class="active btn btn-outline-light text-white text-uppercase fw-bold btn-cta" style="background-color:#f0a774" aria-current="page" href="{{ route('announcements.create') }}">Nuovo Annuncio</a>
            </div>
        @endauth
    </div>

    <div class="container mt-4">
        <h1 class="mb-4">Le nostre forniture</h1>
        <h4 class="mb-4">Trova prodotti di qualità a prezzi convenienti solo su Presto.it</h4>

        <div class="row">
            @foreach ($announcements as $annuncio)
                <div class="col-md-4 mb-4 ">
                    <div class="card ">
                        {{-- <img src="" class="card-img-top" alt="{{ $annuncio->title}}"> --}}
                        <div class="card-body border border-dark  border-2 bg-body-secondary ">
                            <h5 class="card-title text-center fs-3  ">{{ $annuncio->title }}</h5>
                            <p class="card-text">{{ $annuncio->body }}</p>
                            <p class="card-text">{{ $annuncio->category->name }}</p>
                            <p class="card-text "> Prezzo: <strong>{{ $annuncio->price }} €</strong> </p>
                        </div>
                        @php
                            $diffInHours = now()->diffInHours($annuncio->created_at);

                            $hourString = ($diffInHours > 1) ? 'ore' : 'ora';

                            $timeElapsed = ($diffInHours <1) ? 'Meno di un ora fa' : $diffInHours.' '.$hourString
                        @endphp 
                        <div class="card-footer text-muted border border-dark border-2 bg-body-tertiary  ">Data di creazione: {{ $timeElapsed }}</div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <x-footer />
</x-layout>
