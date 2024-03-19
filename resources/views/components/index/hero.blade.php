<div class="container-fluid p-0" style="position:relative;">
    <x-error />
    <div style="position: relative;">
        <img src="{{ asset('img/Banner.jpg') }}" alt="Hero Presto"
            style="width:100%;height:auto;aspect-ratio:16/9;max-height:auto">
        <div
            style="position: absolute; top: 15vw; left: 23vw; transform: translate(-50%, -50%); text-align: center; color: rgb(255, 0, 0); max-width: 90%;">
            <h1 style="margin-bottom: 1.5vw; font-size: 3vw; color:#5337a1;" class="madimi-one-regular">
                {{ __('ui.Herotitle1') }}<br>
                {{ __('ui.Herotitle2') }}
            </h1>
            <p style="font-size: 1vw; color:#6a50af;" class="madimi-one-regular">
                {{ __('ui.Herotitle3') }}
                {{ __('ui.Herotitle4') }}<br>
                {{ __('ui.Herotitle5') }}<br>
                {{ __('ui.Herotitle6') }}
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
