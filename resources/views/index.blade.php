<x-layout>

    <x-nav-bar/>

    <div class="container-fluid p-0 shadow">
        <img src="./img/cover.jpg" class="img-fluid" alt="Cover Photo">
    </div>

    <div class="container mt-4">
        <h1 class="mb-4">Le nostre forniture</h1>
        <h4 class="mb-4">Trova prodotti di qualità a prezzi convenienti solo su Presto.it</h4>

        <div class="row">
            @foreach($ultimi_annunci as $annuncio)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ $annuncio['immagine'] }}" class="card-img-top" alt="{{ $annuncio['titolo'] }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $annuncio['titolo'] }}</h5>
                            <p class="card-text">{{ $annuncio['descrizione'] }}</p>
                            <p class="card-text">Prezzo: {{ $annuncio['prezzo'] }}</p>
                        </div>
                        <div class="card-footer text-muted">Data di creazione: {{ $annuncio['data_creazione'] }}</div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</x-layout>
