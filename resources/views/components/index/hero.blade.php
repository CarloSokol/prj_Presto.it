<div class="container-fluid p-0 shadow" style="position:relative;">

    <x-error/>
    <img src="{{ asset('img/Banner.jpg') }}" alt="Hero Presto"
        style="width:100%;height:auto;aspect-ratio:16/9;max-height:auto">|

        {{-- <div style="position: relative;">
            <img src="{{ asset('img/Banner.jpg') }}" alt="Hero Presto"
                 style="width:100%;height:auto;aspect-ratio:16/9;max-height:auto">
            <div style="position: absolute; top: 20vw; left: 30vw; transform: translate(-50%, -50%); text-align: center; color: rgb(255, 0, 0);">
                <h1 style="margin-bottom: 1.5vw;">Esplora.Scegli.Acquista.<br>
                    Il tuo stile, la tua scelta.</h1>
                <p style="">Trova l'affare perfetto! Esplora, negozia, aggiudicati i tuoi tesori.<br>
                    Ogni clic è un'opportunità, ogni acquisto è un successo.<br>
                    Entra nel gioco dell'acquisto-vendita e vivi l'emozione dell'affare perfetto!</p>
            </div>
        </div>
         --}}
         
    @auth
        <div style="position:absolute; top:43%; left:3%; transform:translateY(-50%) translateX(50%);">
            <a class="btn text-uppercase btn-ctaa" aria-current="page" href="{{ route('announcements.create') }}" style="font-size: 0.9rem; padding: 1vw 2vw;">{{__('ui.NuovoAnnuncio')}}</a>
        </div>
    @endauth

</div>
