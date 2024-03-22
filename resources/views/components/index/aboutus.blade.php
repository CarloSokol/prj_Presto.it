<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="text-center">
                    <h3 class="mb-3">What Customers Say About Us</h3>
                    <p class="text-muted fs-15">A customer is a person or business that buys goods or services from another business. Customers are crucial because they generate revenue.</p>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="row">
            <div class="col-lg-12">
                <div class="swiper testi-slider">
                    <div class="swiper-wrapper my-5">
                        <!-- Slide 1 con 3 commenti -->
                        <div class="swiper-slide mt-5">
                            <!-- Primo commento -->
                            <div class="client-box m-1">
                                <div class="client-desc p-4 border rounded">
                                    <p class="mb-0 fs-16">Thank you for supporting CakePHP 4. We purchased the template because of this support. Please continue to push forward with more integration.</p>
                                </div>
                                <div class="pt-4">
                                    <div class="d-flex align-items-center mt-4 pt-1">
                                        <img src="../assets/images/users/avatar-7.jpg" alt="" class="avatar-sm rounded">
                                        <div class="flex-grow-1 ms-3">
                                            <h5 class="mb-2 fs-16">Chadwick A. Scott</h5>
                                            <p class="text-muted mb-0">Velzon User</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Secondo commento -->
                            <div class="client-box m-1 mt-3">
                                <div class="client-desc p-4 border rounded">
                                    <p class="mb-0 fs-16">We have used your other templates as well and they seem amazing with the design and code quality. Best wishes for future updates. Keep updating; you will be #1 in the near future.</p>
                                </div>
                                <div class="pt-4">
                                    <div class="d-flex align-items-center mt-4 pt-1">
                                        <img src="../assets/images/users/avatar-8.jpg" alt="" class="avatar-sm rounded">
                                        <div class="flex-grow-1 ms-3">
                                            <h5 class="mb-2 fs-16">Tommy Moreno</h5>
                                            <p class="text-muted mb-0">Skote User</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Terzo commento -->
                            <div class="client-box m-1 mt-3">
                                <div class="client-desc p-4 border rounded">
                                    <p class="mb-0 fs-16">The template is very complete as an admin panel and was well written in a way that makes it easy to use.</p>
                                </div>
                                <div class="pt-4">
                                    <div class="d-flex align-items-center mt-4 pt-1">
                                        <img src="../assets/images/users/avatar-10.jpg" alt="" class="avatar-sm rounded">
                                        <div class="flex-grow-1 ms-3">
                                            <h5 class="mb-2 fs-16">Mary Atkinson</h5>
                                            <p class="text-muted mb-0">Velzon User</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide mt-5">
                            <div class="client-box m-1 mt-3">
                                <div class="client-desc p-4 border rounded">
                                    <p class="mb-0 fs-16">We have used your other templates as well and they seem amazing with the design and code quality. Best wishes for future updates. Keep updating; you will be #1 in the near future.</p>
                                </div>
                                <div class="pt-4">
                                    <div class="d-flex align-items-center mt-4 pt-1">
                                        <img src="../assets/images/users/avatar-8.jpg" alt="" class="avatar-sm rounded">
                                        <div class="flex-grow-1 ms-3">
                                            <h5 class="mb-2 fs-16">Tommy Moreno</h5>
                                            <p class="text-muted mb-0">Skote User</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="client-box m-1 mt-3">
                                <div class="client-desc p-4 border rounded">
                                    <p class="mb-0 fs-16">We have used your other templates as well and they seem amazing with the design and code quality. Best wishes for future updates. Keep updating; you will be #1 in the near future.</p>
                                </div>
                                <div class="pt-4">
                                    <div class="d-flex align-items-center mt-4 pt-1">
                                        <img src="../assets/images/users/avatar-8.jpg" alt="" class="avatar-sm rounded">
                                        <div class="flex-grow-1 ms-3">
                                            <h5 class="mb-2 fs-16">Tommy Moreno</h5>
                                            <p class="text-muted mb-0">Skote User</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Fine delle slide -->

                    <!-- Pagination -->
                    <div class="swiper-pagination"></div>
                    <!-- Fine della paginazione -->
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Aggiungi il link alla libreria JavaScript di Swiper -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Inizializza Swiper -->
<script>
    var swiper = new Swiper('.testi-slider', {
        slidesPerView: 1,
        spaceBetween: 30,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });
</script>