<x-layout :title="config('app.name')">

<x-slot:title>
Accedi
</x-slot>

<x-nav-bar/>

    {{-- <div class="container mt-5">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <div class="card">
                    <div class="card-header">
                        Accedi
                    </div>
                    <div class="card-body">
                        <form action="/login" method="POST">
                            @csrf
                            <div class="row g-3">
                                <div class="col-12">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email" class="form-control">
                                    @error('email') <span class="text-danger small">{{ $message }}</span> @enderror
                                </div>
                                <div class="col-12">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" id="password" class="form-control">
                                    @error('password') <span class="text-danger small">{{ $message }}</span> @enderror
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Accedi</button>
                                    <p class="small mt-2">Non sei registrato? <a href="{{ route('register') }}">Clicca qui</a></p>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="container mt-5 mb-5 ">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <div class="">
                    <div class="card-body">
                        <form action="/login" method="POST">
                            <div class="card-header text-muted  h3 mb-3 text-decoration-underline">
                                Accedi
                            </div>
                            @csrf
                            <div class="row g-3">
                                <div class="col-12">
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                                    @error('email') <span class="text-danger small">{{ $message }}</span> @enderror
                                </div>
                                <div class="col-12">
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                                    @error('password') <span class="text-danger small">{{ $message }}</span> @enderror
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-outline-light  ">Accedi</button>
                                    <p class="small mt-2 text-black ">Non sei registrato? <a href="{{ route('register') }}" class="small mt-2 text-dark  ">Clicca qui</a></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    
    {{-- <div class="container-form">
        <form action="/login" method="POST">
            @csrf
            <div class="row g-3">
                <div class="card-header text-light h3">
                    Accedi
                </div>
                <div class="col-12">
                    <input type="email" name="email" id="email" class="" placeholder="Email">
                    @error('email') <span class="text-danger small bg-gradient">{{ $message }}</span> @enderror
                </div>
                <div class="col-12">
                    <input type="password" name="password" id="password" class="" placeholder="Password">
                    @error('password') <span class="text-danger small bg-gradient">{{ $message }}</span> @enderror
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-outline-light">Accedi</button>
                    <p class="small mt-2">Non sei registrato? <a href="{{ route('register') }}">Clicca qui</a></p>
                </div>
            </div>
        </form>
        
    </div> --}}

    <x-footer/>

</x-layout>