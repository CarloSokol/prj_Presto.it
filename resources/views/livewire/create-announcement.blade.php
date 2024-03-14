<div class="border border-primary p-4 rounded-5">
    <h1 class="title text-primary text-center">Crea il tuo annuncio!</h1>

    @include('components.success')

    <form wire:submit.prevent="store" class="p-5">
        <div class="row">
            @csrf
            <div class="mb-3 col-6">
                <label for="title">Titolo Annuncio</label>
                <input wire:model="title" type="text" class="form-control border border-primary p-2 rounded-5 @error('title') is-invalid @enderror">
                @error('title')
                    {{ $message }}
                @enderror
            </div>

            <div class="mb-3 col-6">
                <label for="price">Prezzo</label>
                <input wire:model="price" type="number" class="form-control border border-primary p-2 rounded-5  @error('price') is-invalid @enderror">
                @error('price')
                    {{ $message }}
                @enderror
            </div>

            <div class="mb-3 col-6">
                <label for="category">Categoria</label>
                <select wire:model="category" id="category" class="form-control border border-primary p-2 rounded-5 bg-colore-tranparet">
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
                <label for="body">Descrizione</label>
                <textarea wire:model="body" class="form-control bg-colore-tranparet border border-primary p-2 rounded-5 @error('body') is-invalid @enderror"></textarea>
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
