<div class="container-fluid p-0 shadow" style="position:relative;">

    <x-error/>

    <img src="{{ asset('img/Banner.jpg') }}" alt="Hero Presto"
        style="width:100%;height:auto;aspect-ratio:16/9;max-height:auto">
    @auth
        <div style="position:absolute; top:43%; left:3%; transform:translateY(-50%) translateX(50%);">
            <a class="btn text-uppercase btn-ctaa" aria-current="page" href="{{ route('announcements.create') }}" style="font-size: 2vw; padding: 1vw 2vw;">{{__('ui.NuovoAnnuncio')}}</a>
        </div>
    @endauth

</div>
