<section class="bg-cta py-2">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="py-lg-5">
                    <p class="text-uppercase badge bg-danger-subtle text-danger fs-13">{{ __('ui.bannerB') }} order</p>
                    <h1 class="lh-base fw-semibold mb-3 text-capitalize">{{ __('ui.bannerTitle') }}</h1>
                    <p class="fs-16 mt-2">{{ __('ui.bannerdescription') }}</p>
                    <div class="time-blocks d-flex justify-content-start gap-4 mt-4" >
                        <div class="block">
                            <span class="side-text">DAYS</span>
                            <span class="time-text" id="days">0</span>
                        </div>
                        <div class="block">
                            <span class="side-text">HOURS</span>
                            <span class="time-text" id="hours">0</span>
                        </div>
                        <div class="block">
                            <span class="side-text">MINUTES</span>
                            <span class="time-text" id="minutes">0</span>
                        </div>
                        <div class="block">
                            <span class="side-text">SECONDS</span>
                            <span class="time-text" id="seconds">0</span>
                        </div>
                    </div>
                    {{-- <div class="pt-4 d-grid gap-2 d-md-flex justify-content-md-start">
                        <a href="#!" class="btn btn-primary btn-hover">{{ __('ui.Shopping') }}</a>
                        <a href="#!" class="btn btn-danger btn-hover">{{ __('ui.Subscribe') }}</a>
                    </div> --}}
                </div>
            </div>
            <div class="col-lg-6 col-12 " >
                <div class="box-image text-center text-lg-end">
                    <img src="./img/cta.png" alt="buy" class="img-fluid" style="max-height: 350px">
                </div>
            </div>
        </div>
    </div>
</section>
