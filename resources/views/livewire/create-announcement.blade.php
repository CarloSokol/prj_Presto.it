<div class="bg-secondary border border-color p-4 rounded-5">
    <h1 class="title text-pr-color-h1 text-center">Crea il tuo annuncio!</h1>
    @include('components.success')

    <form wire:submit.prevent="store" class="p-4">
        <div class="row">
            @csrf

            <div class="mb-3 mt-3 col-md-6">
                <input wire:model="title" type="text" placeholder="Titolo Annuncio"
                    class="form-control border border-color p-2 rounded-5 @error('title') is-invalid @enderror">
                @error('title')
                    {{ $message }}
                @enderror
            </div>

            <div class="mb-3 mt-3 col-md-6">
                <input wire:model="price" type="number" placeholder="Prezzo"
                    class="form-control border border-color p-2 rounded-5  @error('price') is-invalid @enderror">
                @error('price')
                    {{ $message }}
                @enderror
            </div>

            <div class="mb-3 mt-3 col-md-6">
                <select wire:model="category" id="category"
                    class="form-control border border-color p-2 rounded-5 bg-colore-tranparet">
                    <option value="">Scegli la categoria</option>
                    @foreach ($categories as $cat)
                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mt-3 mt-3 col-md-6">
                <input wire:model="temporary_images" type="file" name="images" multiple 
                    class="form-control large shadow @error('temporary_images.*') is-invalid @enderror" placeholder="Img" />
                @error('temporary_images .* ')
                    <p class="text-danger mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3 mt-3 col-12">
                <textarea wire:model="body"
                    class="form-control bg-colore-tranparet border border-color p-2 rounded-5 @error('body') is-invalid @enderror" placeholder="Descrizione"></textarea>
                @error('body')
                    {{ $message }}
                @enderror
            </div>

            <div class="col-12 text-center">
                <button type="submit" class="btn btn-cta shadow d-inline px-5">Crea</button>
            </div>
        </div>
    </form>
</div>
