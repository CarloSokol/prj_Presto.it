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
                            <div class="col-11 border-color rounded-2 list-item">
                                <div class="row row-cols-4 align-items-center">
                                    <div class="col-7  h-auto ">

                                        <div id="carousel{{ $announcement->id }}" class="carousel slide w-100 d-none">
                                            <div class="carousel-inner">
                                                @forelse ($announcement->images as $image)
                                                    <div
                                                        class="carousel-item {{ $loop->iteration === 1 ? 'active' : '' }}">
                                                        <img src="{{ Storage::url($image->path) }}"
                                                            style="max-height:300px"
                                                            class="d-block w-100 object-fit-cover" alt="...">
                                                    </div>
                                                @empty
                                                    <div class="carousel-item active">
                                                        <img src="https://picsum.photos/id/11/1400/550"
                                                            style="max-height:300px"
                                                            class="w-100 d-block object-fit-cover" alt="...">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img src="https://picsum.photos/id/17/1400/550"
                                                            style="max-height:300px"
                                                            class="w-100 d-block object-fit-cover" alt="...">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img src="https://picsum.photos/id/18/1400/550"
                                                            style="max-height:300px"
                                                            class="w-100 d-block object-fit-cover" alt="...">
                                                    </div>
                                                @endforelse
                                            </div>
                                            <button class="carousel-control-prev" type="button"
                                                data-bs-target="#carousel{{ $announcement->id }}" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button"
                                                data-bs-target="#carousel{{ $announcement->id }}" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>

                                        <div class="text-center d-flex justify-content-center align-items-center">
                                            <button type="button" class="btn btn-cta toggle-carousel w-auto p-2"
                                                data-carousel-id="carousel{{ $announcement->id }}">{{ __('ui.MostraCarosello') }}</button>
                                        </div>


                                        

                                    </div>

                                    <div class="col-5 p-3 w-auto h-auto ms-3 ">
                                        <p class="text-muted mb-2">
                                            <strong>{{ $announcement->created_at->format('d/m/Y') }}</strong>
                                        </p>
                                        <p class="mb-2"><strong>{{ $announcement->title }}</strong></p>
                                        <p class="mb-2"><strong>Descrizione</strong>: {{ $announcement->body }}</p>
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
                                                    class="btn btn-danger shadow ms-2">{{ __('ui.Rifiuta') }}
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <!-- Aggiungi qui il codice da visualizzare nel caso in cui non ci siano annunci -->
                        @endforelse

                        <!-- Toggle Carousel function -->
                        <script>
                            document.querySelectorAll('.toggle-carousel').forEach(button => {
                                button.addEventListener('click', function() {
                                    const carouselId = this.getAttribute('data-carousel-id');
                                    const carousel = document.getElementById(carouselId);
                                    carousel.classList.toggle('d-none');

                                    // Modifica il testo del pulsante in base allo stato del carosello
                                    const buttonText = carousel.classList.contains('d-none') ? '{{ __('ui.MostraCarosello') }}' :
                                        '{{ __('ui.ChiudiCarosello') }}';
                                    this.textContent = buttonText;
                                });
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>




    </section>


</x-layout>
