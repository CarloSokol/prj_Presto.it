<x-layout :title="config('app.name')">

<x-slot:title>
Registrati
</x-slot>

<x-nav-bar/>

<div class="container mt-5">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <div class="">
                    
                    <div class="card-body">
                        <form action="/register" method="POST">
                            <div class="card-header text-muted h3 mb-3 text-decoration-underline">
                                Registrati
                            </div>
                            @csrf
                            <div class="row g-3">
                                <div class="col-12">
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Name">
                                    @error('name') <span class="text-danger small">{{ $message }}</span> @enderror
                                </div>
                                <div class="col-12">
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                                    @error('email') <span class="text-danger small">{{ $message }}</span> @enderror
                                </div>
                                <div class="col-12">
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                                    @error('password') <span class="text-danger small">{{ $message }}</span> @enderror
                                </div>
                                <div class="col-12">
                                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Conferma Password">
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-outline-light">Registrati</button>
                                    <p class="small mt-2 text-black">Già registrato? <a href="{{ route('login') }}" class="small mt-2 text-dark  ">Clicca qui</a></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-layout>