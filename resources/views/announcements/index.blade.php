<x-layout id="announcementsList">

    <div class="container mt-4" id="announcementsSection">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
            @foreach ($announcements as $annuncio)
            <div class="col mb-4">
                <div class="card h-100 shadow">
                    <img src="https://picsum.photos/200" class="card-img-top rounded-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center fs-4">{{ $annuncio->title }}</h5>
                        <p class="card-text ">{{ $annuncio->body }}</p>
                        <p class="card-text">{{ $annuncio->category->name }}</p>
                        <p class="card-text">Prezzo: <strong>{{ $annuncio->price }} €</strong></p>
                    </div>
                    @php
                    $diffInHours = now()->diffInHours($annuncio->created_at);
    
                    $hourString = ($diffInHours > 1) ? 'ore' : 'ora';
    
                    $timeElapsed = ($diffInHours <1) ? 'Meno di un ora fa' : $diffInHours.' '.$hourString
                    @endphp 
                    <div class="card-footer text-muted">
                        Data di creazione: {{ $timeElapsed }}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</x-layout>
