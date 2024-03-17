<div class="container-fluid p-0 shadow" style="position:relative;">

    <x-error/>

    <img src="{{ asset('img/Banner.jpg') }}" alt="Hero Presto"
        style="width:100%;height:auto;aspect-ratio:16/9;max-height:700px;">
    @auth
        <div style="position:absolute; top:50%; right:50%; transform:translateY(-50%) translateX(50%);">
            <a class="btn text-uppercase btn-cta" aria-current="page" href="{{ route('announcements.create') }}">{{__('ui.NuovoAnnuncio')}}</a>
        </div>
    @endauth

</div>