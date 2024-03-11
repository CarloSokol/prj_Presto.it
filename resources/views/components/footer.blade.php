<footer class="footer fixed-bottom">
    <div class="container py-5">
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="footer-section">
                    <h3 class="footer-section-title">Contatti</h3>

                    <p><i class="fas fa-map-marker-alt ms-2 "></i> <a href="" class="text-decoration-none text-light ms-2">Via Example 123, 00100 Città, Paese</a></p>
                    <p><i class="fas fa-envelope ms-2"></i> <a href="" class="text-decoration-none text-light ms-2">info@example.com</a></p>
                    <p><i class="fas fa-phone ms-2"></i> <a href="" class="text-decoration-none text-light ms-2">+00 123 456789</a></p>
                    
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="footer-section">
                    <h3 class="footer-section-title text-center">Link Utili</h3>
                    <ul class="footer-links">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Chi Siamo</a></li>
                        <li><a href="#">Prodotti</a></li>
                        <li><a href="#">Contatti</a></li>
                        <li class="nav-item">
                            <a class="footer-links" aria-current="page" href="{{ route('become.revisor') }}">
                                Lavora con noi</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="footer-section">
                    <h3 class="footer-section-title text-end">Seguici</h3>
                    <ul class="social-links text-end">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>&copy; {{ date('Y') }} Nome Azienda. Tutti i diritti riservati.</p>
                </div>
            </div>
        </div>
    </div>
</footer>
