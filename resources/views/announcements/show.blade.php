<x-layout>
    <div class="container-fluid bg-gradient bg-primary shadow mb-2">
        <div class="row">
            <div class="col-12 text-light p-2">
                <h1 class="text-center "> Title: {{ $announcement->title }}</h1>
            </div>
        </div>
    </div>
        
    <div class="container">
        <div class="row ">
            <div class="col-12">
                <div id="showCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">


                        @forelse ($announcement->images as $image)
                            <div class="carousel-item {{ $loop->iteration === 1 ? 'active' : '' }}">
                                <img src="{{ Storage::url($image->path) }}" style="max-width: 20%"
                                    class="d-block w-100 object-fit-cover" alt="...">
                            </div>
                        @empty
                            <div class="carousel-item active">
                                <img src="https://picsum.photos/1400/550" style="max-width: 20%"
                                    class="w-100 d-block object-fit-cover" alt="...">
                            </div>
                        @endforelse

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

                <p class="card-text fst-italic fw-medium text-break ">Description: {{ $announcement->body }}</p>
                <p class="card-text fw-bolder">Price: {{ $announcement->price }} €</p>
                <a href="{{ route('categoryShow', ['category' => $announcement->category]) }}"
                    class="my-2 border-top pt-2 border-dark card-link shadow btn btn-primary">Categoria:
                    {{ $announcement->category->name }}</a>
                <p class="card-footer fw-lighter">Pubblicato il: {{ $announcement->created_at->format('d/m/Y') }} -
                    Autore:
                    {{ $announcement->user->name ?? '' }}</p>
            </div>
        </div>
    </div>

</x-layout>
