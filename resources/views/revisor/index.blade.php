<x-layout>

    <section style="min-height: 75vh; height: auto;">
        <div class="container-fluid bg-gradient shadow py-2">
            <h1 class=" text-center text-pr-color-h1">
                {{ $announcements_to_check->count() ? __('ui.RevTitleSi') : __('ui.RevTitleNo') }}
            </h1>
        </div>

        <div class="container">
            <div class="tab-content">
                <div class="tab-pane show active">
                    <div class="row justify-content-center gap-3 my-5">

                        @forelse ($announcements_to_check as $announcement)
                            <!-- Schedule Item 1 -->
                            <div class="col-12 border-color rounded-2 ">
                                <div class="row row-cols-4">
                                    <div class="col-5">

                                        <div id="carousel{{ $announcement->id }}" class="carousel slide w-100">
                                            <div class="carousel-inner">
                                                @forelse ($announcement->images as $image)
                                                    <div
                                                        class="carousel-item {{ $loop->iteration === 1 ? 'active' : '' }}">
                                                        <img src="{{ Storage::url($image->path) }}" 
                                                            style="max-height:200px"
                                                            class="d-block w-100 object-fit-cover" alt="...">
                                                    </div>
                                                @empty
                                                    <div class="carousel-item active">
                                                        <img src="https://picsum.photos/1400/550"
                                                            style="max-height:200px"
                                                            class="w-100 d-block object-fit-cover" alt="...">
                                                    </div>
                                                @endforelse
                                                <button class="carousel-control-prev" type="button"
                                                    data-bs-target="#carousel{{ $announcement->id }}"
                                                    data-bs-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Previous</span>
                                                </button>
                                                <button class="carousel-control-next" type="button"
                                                    data-bs-target="#carousel{{ $announcement->id }}"
                                                    data-bs-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Next</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-7 p-3">
                                        <p class="text-muted">
                                            <strong>{{ $announcement->created_at->format('d/m/Y') }}</strong>
                                        </p>
                                        <p><strong>{{ $announcement->title }}</strong></p>
                                        <p><strong>Descrizione</strong>: {{ $announcement->body }}</p>
                                        <div class="d-inline-block">
                                            <form
                                                action="{{ route('revisor.accept_announcement', ['announcement' => $announcement]) }}"
                                                method="POST">
                                                @csrf
                                                @method('PATCH')
                                                <button type="submit"
                                                    class="btn btn-success shadow">{{ __('ui.Accetta') }}</button>
                                            </form>
                                        </div>
                                        <div class="d-inline-block">
                                            <form
                                                action="{{ route('revisor.reject_announcement', ['announcement' => $announcement]) }}"
                                                method="POST">
                                                @csrf
                                                @method('PATCH')
                                                <button type="submit"
                                                    class="btn btn-danger shadow">{{ __('ui.Rifiuta') }}</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </section>


</x-layout>
