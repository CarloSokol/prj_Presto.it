<div class="container">

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