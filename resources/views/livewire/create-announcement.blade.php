<div class="bg-secondary border border-primary p-4 rounded-5">
    <h1 class="title text-primary text-center">Crea il tuo annuncio!</h1>

    @include('components.success')

    <form wire:submit.prevent="store" class="p-5">
        <div class="row">
            @csrf
            <div class="mb-3 col-6">
                <input wire:model="title" type="text" class="mb-3 form-control border border-primary p-2 rounded-4 @error('title') is-invalid @enderror" 
                placeholder="Titolo Annuncio">
                @error('title')
                    {{ $message }}
                @enderror
            </div>

            <div class="mb-3 col-6">
                <input wire:model="price" type="number" class="mb-3 form-control border border-primary p-2 rounded-4 @error('price') is-invalid @enderror" placeholder="Prezzo">
                @error('price')
                    {{ $message }}
                @enderror
            </div>

            <div class="mb-3 col-6">
                <select wire:model="category" id="category" class="mb-3 border border-primary p-2 rounded-4 form-control bg-colore-tranparet">
{{-- .defer --}}
                    @if (isset($category))
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @else
                        <option value="">Scegli la categoria</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach

                    @endif

                </select>
            </div>

            <div class="mb-3 col-12">
                <textarea wire:model="body" class="mb-3 form-control border border-primary p-2 rounded-4 bg-colore-tranparet @error('body') is-invalid @enderror" placeholder="Descrizione"></textarea>
                @error('body')
                    {{ $message }}
                @enderror
            </div>
            <div class="col-12 text-center">
                <button type="submit" class="btn btn-cta shadow d-inline w-auto px-5">Crea</button>
            </div>
        </div>
    </form>

</div>
