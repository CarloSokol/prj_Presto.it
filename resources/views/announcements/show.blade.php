<x-layout>
    <x-nav-bar />

    <div class="container-fluid p-5 bg-gradient bg-success shadow mb-4">
        <div class="row">
            <div class="col-12 text-black p-5">
                <h1 class="display-3 text-center "> {{ $announcement->title }}</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div id="showCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://picsum.photos/id/27/1400/550" class="img-fluid p-3 rounded" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://picsum.photos/id/28/1400/550" class="img-fluid p-3 rounded" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://picsum.photos/id/29/1400/550" class="img-fluid p-3 rounded" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#showCarousel"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#showCarousel"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

                <h4 class="card-title mt-3">Title: {{$announcement->title}}</h4>
                <p class="card-text fst-italic fw-medium">Description: {{$announcement->body}}</p>
                <p class="card-text fw-bolder">Price: {{$announcement->price}} €</p>
                <a href="{{route('categoryShow', ['category'=>$announcement->category]) }}"
                    class="my-2 border-top pt-2 border-dark card-link shadow btn btn-success">Categoria:
                    {{$announcement->category->name}}</a>
                <p class="card-footer fw-lighter">Pubblicato il: {{$announcement->created_at->format('d/m/Y')}} - Autore:
                    {{$announcement->user->name ?? ''}}</p>
            </div>
        </div>
    </div>

    <x-footer />
</x-layout>
