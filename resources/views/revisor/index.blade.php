<x-layout>

    <section style="min-height: 75vh; height: auto;">
        <div class="container-fluid bg-gradient  shadow mb-3">
            <div class="row">
                <div class="col-12 text-pr-color-h1 p-2">
                    <h1 class=" text-center">

                        @if ($announcement_to_check)
                            {{ __('ui.RevTitleSi') }}
                        @else
                            {{ __('ui.RevTitleNo') }}
                        @endif

                    </h1>
                </div>
            </div>
        </div>

        @if ($announcement_to_check)
            <div class="container h-auto " style="height: auto;">
                @foreach ($announcement_to_check as $announcement)
                <div class="row">
                    <div class="col-12">
                        <div id="showCarousel" class="carousel slide" data-bs-ride="carousel">
                            @if (count($announcement_to_check->images))
                                <div class="carousel-inner">
                                    @foreach ($announcement_to_check->images as $image)
                                        <div
                                            class="carousel-item @if($loop->first)active  @endif">
                                            <img src="{{ Storage::url($image->path) }}" class="img-fluid p-3 rounded"
                                                alt="...">
                                        </div>
                                    @endforeach
                                </div>
                            @else
                                <div class="carousel-inner">

                                    <div class="carousel-item active">
                                        <img src="https://picsum.photos/1400/550" class="img-fluid p-3 rounded"
                                            alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="https://picsum.photos/1400/550" class="img-fluid p-3 rounded"
                                            alt="...">
                                    </div>
                                </div>
                            @endif
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
                        <h5 class="card-title">Titolo: {{ $announcement_to_check->title }}</h5>
                        <p class="card-text">Descrizione: {{ $announcement_to_check->body }}</p>
                        <p class="card-footer">Pubblicato il: {{ $announcement_to_check->created_at->format('d/m/Y') }}
                        </p>
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col-12 col-md-6">
                        <form
                            action="{{ route('revisor.accept_announcement', ['announcement' => $announcement_to_check]) }}"
                            method="POST">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="btn btn-success shadow">{{ __('ui.Accetta') }}</button>
                        </form>
                    </div>
                    <div class="col-12 col-md-6 text-end">
                        <form
                            action="{{ route('revisor.reject_announcement', ['announcement' => $announcement_to_check]) }}"
                            method="POST">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="btn btn-danger shadow">{{ __('ui.Rifiuta') }}</button>
                        </form>
                    </div>

                </div>
                @endforeach
            </div>
        @endif
    </section>


</x-layout>