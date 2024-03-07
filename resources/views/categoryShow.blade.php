<x-layout>

    <x-nav-bar />

    <div class="container-fluid p-5 bg-gradient bg-success shadow mb-4">
        <div class="row">
            <div class="col-12 text-light p-5">
                <h1 class="display-2">Esplora la categoria {{ $category->name }}</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    @forelse ($category->announcements as $announcement)
                        <div class="col-12 col-md-4 my-2 ">
                            <div class="card shadow " >
                                <img src="https://picsum.photos/200" class="card-img-top p-3 rounded" alt=" ... ">
                                <div class="card-body mx-card">
                                    <h5 class="card-title fs-2 font-monospace">{{ $announcement->title }}</h5>
                                    <p class="card-text  fst-italic fw-medium">{{ $announcement->body }}</p>
                                    <p class="card-text fw-bolder">{{ $announcement->price }} €</p>
                                    <a href="{{ route('announcements.show', compact('announcement')) }}"
                                        class="btn btn-primary shadow">Visualizza</a>
                                    <a href="{{ route('categoryShow', ['category' => $announcement->category]) }}"
                                        class="my-2 border-top pt-2 border-dark card-link shadow btn btn-success">Categoria:
                                        {{ $announcement->category->name }}</a>
                                    <p class="card-footer fw-lighter text-bg-secondary p-4">Pubblicato il :
                                        {{ $announcement->created_at->format('d/
                                        m/Y') }} - Autore :
                                        {{ $announcement->user->name ?? '' }}</p>
                                </div>

                            </div>
                        </div>
                    @empty
                        <div class="col-12">
                            <p class="h1">Non sono presenti annunci per questa categoria !< /p>
                                    <p class="h2">Pubblicane uno: <a href="{{ route('announcements.create') }}"
                                            class="btn btn-success shadow">Nuovo Annuncio</a></p>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>

    <x-footer />
</x-layout>
