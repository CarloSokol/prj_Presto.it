<div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 justify-content-center ">

    @foreach ($announcements as $annuncio)
        <div class="col mb-4 " style="grid-auto-rows: 1fr">
            <div class="card border border-primary rounded-3 h-100">
                <div class="card-body">
                    <h5 class="card-title text-center text-primary fs-3">{{ $annuncio->title }}</h5>
                    <img src="https://picsum.photos/id/27/300/200" class="img-fluid p-1  rounded-5" alt="...">
                    <div class="border-2 mb-2 mt-2">
                        <p class="card-text"> {{ Str::limit($annuncio->body, 50) }}</p>
                        <p class="card-text"><strong>Categoria</strong>:  {{ $annuncio->category->name }} </p>
                        <p class="card-text"><strong>Prezzo</strong>: {{ $annuncio->price }} €</p>
                    </div>
                    @php
                        $diffInHours = now()->diffInHours($annuncio->created_at);

                        $hourString = $diffInHours > 1 ? 'ore' : 'ora';

                        $timeElapsed = $diffInHours < 1 ? 'Meno di un ora fa' : $diffInHours . ' ' . $hourString;
                    @endphp
                    <div class="text-muted border-2">
                        Data di creazione: {{ $timeElapsed }}
                    </div>
                </div>
                <div class="card-footer text-center border-0">
                    <a href="" class="btn btn-cta mb-3 mx-auto">Per saperne di più</a>
                </div>
            </div>
        </div>
    @endforeach

</div>