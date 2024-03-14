@if (session()->has('access.denied'))
<div class="bg-danger">
    <p class=""> 
        {{ Session::get('access.denied') }}
    </p>
</div>
@endif
