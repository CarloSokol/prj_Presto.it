<div>
    <h1 class="title">Crea il tuo annuncio!</h1>

    @include('components.success')

    <form wire:submit.prevent="store" class="p-5">
        <div class="row">
            @csrf
            <div class="mb-3 col-6">
                <label for="title">Titolo Annuncio</label>
                <input wire:model="title" type="text" class="form-control @error('title') is-invalid @enderror">
                @error('title')
                    {{ $message }}
                @enderror
            </div>

            <div class="mb-3 col-6">
                <label for="price">Prezzo</label>
                <input wire:model="price" type="number" class="form-control  @error('price') is-invalid @enderror">
                @error('price')
                    {{ $message }}
                @enderror
            </div>

            <div class="mb-3 col-6">
                <label for="category">Categoria</label>
                <select wire:model.defer="category" id="category" class="form-control bg-colore-tranparet">
                    <option value="">Scegli la categoria</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3 col-12">
                <label for="body">Descrizione</label>
                <textarea wire:model="body" class="form-control bg-colore-tranparet @error('body') is-invalid @enderror"></textarea>
                @error('body')
                    {{ $message }}
                @enderror
            </div>
            <button type="submit" class="btn btn-primary shadow px-4 py-2 d-inline ">Crea</button>
        </div>
    </form>

</div>
