<x-layout id="workWithUs">

    <div class="container p-3" id="workWithUsSection">
        <form method="POST" action="{{ route('revisor.send') }}">
            @csrf
            <x-message />
            <div class="row p-2 g-3">
                <div class="col-12 col-md-6">
                    <img class="img-fluid" src="https://picsum.photos/600/300" alt="">
                </div>
                <div class="col-12 col-md-6 d-flex flex-column justify-content-center ">
                    <h1 class="text-primary"><strong class="text-black">Lavora</strong> con noi</h1>
                    <p><strong>Invia la tua candidatura per far parte del team di Presto</strong></p>
                    <textarea class="mb-3" type="textarea" name="description" rows="5"
                        placeholder="Inserisci una tua breve presentazione"></textarea>
                    <button class="bg-primary text-white" type="submit">Diventa Revisore </button>
                </div>
            </div>
        </form>
    </div>
</x-layout>
