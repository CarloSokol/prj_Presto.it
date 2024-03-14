@if (session()->has('message'))
<div class="bg-primary">
    <p class="">
        {{ Session::get('message') }}
    </p>
</div>
@endif