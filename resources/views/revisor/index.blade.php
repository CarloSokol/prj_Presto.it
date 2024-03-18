<x-layout>

    <section style="min-height: 75vh; height: auto;">
        <div class="container-fluid bg-gradient bg-primary shadow mb-3">
            <div class="row">
                <div class="col-12 text-light p-2">
                    <h1 class="text-center">
                        @if ($announcements_to_check)
                            {{ __('ui.RevTitleSi') }}
                        @else
                            {{ __('ui.RevTitleNo') }}
                        @endif
                    </h1>
                </div>
            </div>
        </div>

        @if ($announcements_to_check)
            <div class="container h-auto">
                <div class="row">
                    @foreach ($announcements_to_check as $announcement)
                        <div class="col-12 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="carousel-container d-none" id="carouselContainer_{{ $announcement->id }}">
                                        <div id="carousel_{{ $announcement->id }}" class="carousel slide" data-bs-ride="carousel">
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
                                            <button class="carousel-control-prev" type="button" data-bs-target="#carousel_{{ $announcement->id }}" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#carousel_{{ $announcement->id }}" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    </div>
                                    <h5 class="card-title">Titolo: {{ $announcement->title }}</h5>
                                    <p class="card-text">Descrizione: {{ $announcement->body }}</p>
                                    <p class="card-footer">Pubblicato il: {{ $announcement->created_at->format('d/m/Y') }}</p>
                                </div>
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="me-auto ms-auto col-2">
                                            <form action="{{ route('revisor.accept_announcement', ['announcement' => $announcement]) }}" method="POST">
                                                @csrf
                                                @method('PATCH')
                                                <button type="submit" class="btn btn-success">{{ __('ui.Accetta') }}</button>
                                            </form>
                                        </div>
                                        <div class="me-auto ms-auto col-2">
                                            <form action="{{ route('revisor.reject_announcement', ['announcement' => $announcement]) }}" method="POST">
                                                @csrf
                                                @method('PATCH')
                                                <button type="submit" class="btn btn-danger">{{ __('ui.Rifiuta') }}</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif

    </section>

</x-layout>
