<div class="container-fluid p-0" style="position:relative;">
    <x-error />
    <div style="position: relative;">
        <img src="{{ asset('img/Banner.jpg') }}" alt="Hero Presto"
            style="width:100%;height:auto;aspect-ratio:16/9;max-height:auto">
        <div
            style="position: absolute; top: 15vw; left: 23vw; transform: translate(-50%, -50%); text-align: center; color: rgb(255, 0, 0); max-width: 90%;">
            <h1 style="margin-bottom: 1.5vw; font-size: 3vw; color:#5337a1;" class="madimi-one-regular">
                Esplora.Scegli.Acquista.<br>
                Il tuo stile, la tua scelta.
            </h1>
            <p style="font-size: 1vw; color:#6a50af;" class="madimi-one-regular">
                Trova l'affare perfetto! Esplora,
                negozia, aggiudicati i tuoi tesori.<br>
                Ogni clic è un'opportunità, ogni acquisto è un successo.<br>
                Entra nel gioco dell'acquisto-vendita e vivi l'emozione dell'affare perfetto!
            </p>
        </div>
    </div>

    @auth
        <div style="position:absolute; top:43%; left:11%; transform:translateY(-50%) translateX(50%);">
            <a class="btn text-uppercase btn-ctaa" aria-current="page" href="{{ route('announcements.create') }}"
                style="font-size: 0.8vw; padding: 1vw 2vw;">{{ __('ui.NuovoAnnuncio') }}</a>
        </div>
    @endauth
</div>
