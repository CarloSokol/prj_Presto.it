@foreach ($announcements as $annuncio)
    <div class="m-3 col rounded-5 " style="grid-auto-rows: 1fr" data-tilt data-tilt-max="7" data-tilt-reset="true"
        data-tilt-speed="300">
        <div class="card card-m  rounded-5 h-100">
            @if (auth()->user() && auth()->user()->is_revisor)
                <form action="{{ route('announcement.remove', ['announcement' => $annuncio]) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button type="submit" id="removeAnnouncement">
                        <span><i class="fa-solid fa-trash-can"></i></span>
                    </button>
                </form>
            @endif
            <div class="card-body ">
                <img src="{{ !$annuncio->images()->get()->isEmpty() ? $annuncio->images()->first()->getUrl(400, 300) : 'https://picsum.photos/200' }}"
                    class="card-img-top p-3 rounded" alt=" ... ">
                <h5 class="card-title text-center text-primary  fs-3">{{ $annuncio->title }}</h5>
                <div class="border-2 mb-2 mt-2">
                    <p class="card-text mb-2 "><strong>Descrizione</strong>:<br> {{ Str::limit($annuncio->body, 50) }}
                    </p>
                    <p class="card-text mb-2 "><strong>Categoria</strong>: {{ $annuncio->category->name }} </p>
                    <p class="card-text mb-2 "><strong>Prezzo</strong>: {{ $annuncio->price }} €</p>
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
            <div class="card-footer text-center border-0 "
                style=" 
                    border-bottom-left-radius: 32px;
                    border-bottom-right-radius: 32px;
                    ">
                <a href="{{ route('announcements.show', $annuncio) }}" class="btn btn-cta p-2  m-1 mx-auto">Per saperne
                    di
                    più</a>
            </div>
        </div>
    </div>
@endforeach

<section class=" container bg-danger-subtle bg-cta py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="py-lg-5">
                    <p class="text-uppercase badge bg-danger-subtle text-danger fs-13">Get <b>50%</b> off to your order</p>
                    <h1 class="lh-base fw-semibold mb-3 text-capitalize">Deal of the Week</h1>
                    <p class="fs-16 mt-2">The hands-down winner of denim-friendly sandal styles has to be flat and simple thong sandals. They can be paired with virtually every style of women's jeans imaginable, and, as long as you can stand the toe strap, they tend to be really comfortable as well.</p>
                    <div class="row align-items-center mt-4">
                        <div class="col-lg-10">
                            <div class="ecommerce-land-countdown mt-3 mb-0">
                                <div data-countdown="Jan 30, 2025" class="countdownlist">
                                    <div class="countdownlist-item">
                                        <div class="count-title">Days</div>
                                        <div class="count-num">315</div>
                                    </div>
                                    <div class="countdownlist-item">
                                        <div class="count-title">Hours</div>
                                        <div class="count-num">2</div>
                                    </div>
                                    <div class="countdownlist-item">
                                        <div class="count-title">Minutes</div>
                                        <div class="count-num">32</div>
                                    </div>
                                    <div class="countdownlist-item">
                                        <div class="count-title">Seconds</div>
                                        <div class="count-num">6</div>
                                    </div>
                                </div>
                                <div class="mt-4 pt-2 d-flex gap-2">
                                    <a href="#!" class="btn btn-primary w-md btn-hover">Shop Now</a>
                                    <a href="#!" class="btn btn-danger w-md btn-hover">Subscribe</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 d-none d-lg-block">
                <img src="../assets/images/ecommerce/home/cta.png" alt="" class="mt-lg-n5">
            </div>
        </div>
    </div>
</section>

