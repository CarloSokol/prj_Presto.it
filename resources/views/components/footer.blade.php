<footer class="footer fixed-bottom shadow-lg ">
    <div class="container p-3">
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="footer-section">
                    <h3 class="footer-section-title ps-2">{{__('ui.Contatti')}}</h3>

                    <p><i class="fas fa-map-marker-alt ms-2 "></i> <a href=""
                            class="text-decoration-none  ms-2 courgette-regulare ">Via Example 123, 00100 Città,
                            Italia </a></p>
                    <p><i class="fas fa-envelope ms-2 "></i> <a href=""
                            class="text-decoration-none  ms-2 courgette-regulare">info@presto.com</a></p>
                    <p><i class="fas fa-phone ms-2"></i> <a href=""
                            class="text-decoration-none ms-2 courgette-regulare">+00 123 456789</a></p>

                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="footer-section">
                    <h3 class="footer-section-title text-center ">{{__('ui.Link Utili')}}</h3>
                    <ul class="footer-links  ">

                        <li><a class="courgette-regulare" href="{{ route('welcome') }}">Home</a></li>
                        {{-- <li><a class="courgette-regulare" href="#">Chi Siamo</a></li>
                        <li><a class="courgette-regulare" href="#">Prodotti</a></li>
                        <li><a class="courgette-regulare" href="#">Contatti</a></li> --}}
                        <li class="nav-item mt-4">
                            <a class="footer-links courgette-regulare " aria-current="page" href="{{ route('revisor.become') }}"
                            style="">
                                {{__('ui.LavoraConNoi')}}</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="footer-section text-black ">
                    <h3 class="footer-section-title text-end">{{__('ui.Seguici')}}</h3>
                    <ul class="social-links text-end">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom p-2 ">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>&copy; {{ date('Y') }} Nome Azienda. Tutti i diritti riservati.</p>
                </div>
            </div>
        </div>
    </div>
</footer>
