<x-layout>
<<<<<<< HEAD

    <x-nav-bar/>

    <div class="row">
        @foreach ($announcements as $annuncio)
            <div class="col-md-4 mb-4 ">
                <div class="card ">
                    <img src="https://picsum.photos/200" class="card-img-top p-3 rounded" alt=" ... ">
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
        {{$announcements->links()}}
    </div>


=======
    <x-nav-bar/>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Adesso sono stanco, domani facciamo vedere gli annunci</h1>
            </div>
        </div>
    </div>
>>>>>>> 58a66433507a87b33e2ea7b1661191e49de8f638
</x-layout>