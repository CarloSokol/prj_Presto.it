<x-layout :title="config('app.name')" id='register'>

<x-slot:title>
Registrati
</x-slot>


<div class="container d-flex justify-content-center align-items-center" id="registerSection">
    <div class="card rounded-5 col-6">
        <div class="card-body">
            <form action="/register" method="POST" class="p-5">
                <div class="card-header border-0 text-center text-primary h3 mb-2">
                    Registrati
                </div>
                @csrf
                <div class="row g-3">
                    <div class="col-12 col-lg-6 offset-lg-3">
                        <input type="text" name="name" id="name" class="form-control" placeholder="Name">
                        @error('name') <span class="text-danger small">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-12 col-lg-6 offset-lg-3">
                        <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                        @error('email') <span class="text-danger small">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-12 col-lg-6 offset-lg-3">
                        <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                        @error('password') <span class="text-danger small">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-12 col-lg-6 offset-lg-3">
                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Conferma Password">
                    </div>
                    <div class="col-12 col-lg-6 offset-lg-3 text-center">
                        <button type="submit" class="btn btn-cta">Registrati</button>
                        <p class="small mt-2 text-black">Già registrato? <a href="{{ route('login') }}" class="small mt-2 text-dark  ">Clicca qui</a></p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

</x-layout>