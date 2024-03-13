<x-layout>

    <div class="container-fluid p-5 bg-gradient bg-success shadow mb-4">
        <div class="row">
            <div class="col-12 text-light p-5">
                <h1 class="display-2">Esplora la categoria {{ $category->name }}</h1>
            </div>
        </div>
    </div>

    <div class="container">
        
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
            @forelse ($category->announcements as $announcement)
                <div class="col mb-4">
                    <div class="card text-center border rounded-5 h-100 ">

                        <div class="card-body">
                            <h5 class="card-title text-center fs-3">{{ $announcement->title }}</h5>
                            <img src="https://picsum.photos/200" class="img-fluid p-1  rounded-5" alt="...">

                            <p class="card-text fst-italic fw-medium mb-3 announcement-body"
                                style="height: 145px; overflow: hidden; text-overflow: ellipsis;">{{ $announcement->body }}</p>
                            <p class="card-text fw-bolder mb-3"> {{ $announcement->price }} €</p>
                            {{--  --}}
                            <p class="card-footer fw-lighter  mt-3 ciao ">Pubblicato il :
                                {{ $announcement->created_at->format('d/m/Y') }} - Autore :
                                {{ $announcement->user->name ?? '' }}</p>
                        </div>
                        <span class="d-flex justify-content-between">
                                <a href="{{ route('announcements.show', compact('announcement')) }}"
                                    class="btn btn-primary shadow mb-3 equal-btn shadow">Visualizza</a>
                                <a href="{{ route('categoryShow', ['category' => $announcement->category]) }}"
                                    class="btn btn-primary shadow mb-3 equal-btn shadow">Categoria:
                                    {{ $announcement->category->name }}</a>
                            </span>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <p class="h1">Non sono presenti annunci per questa categoria !</p>
                    <p class="h2">Pubblicane uno: <a href="{{ route('announcements.create', ['category'=>$category]) }}"
                            class="btn btn-success shadow">Nuovo Annuncio</a></p>
                </div>
            @endforelse
        </div>
    </div>

</x-layout>