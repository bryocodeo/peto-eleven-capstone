    <!-- Footer Start -->
    <div class="container-fluid bg-light mt-4 py-4">
        <div class="container pt-5">
            <div class="row g-5">
                <div class="col-lg-5 col-md-6">
                    <h5 class="text-uppercase border-start border-5 border-primary ps-3 mb-4">Get In Touch</h5>
                    <p class="mb-4">Pet-O/Eleven. Your one-stop-shop for your pets full-tummy!</p>
                    <p class="mb-2"><i class="bi bi-geo-alt text-primary me-2"></i>001 Bark St. Brgy. Catdog, Manila, PH</p>
                    <p class="mb-2"><i class="bi bi-envelope-open text-primary me-2"></i>petoeleven@gmail.com</p>
                    <p class="mb-0"><i class="bi bi-telephone text-primary me-2"></i>+63 910 0210 123</p>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h5 class="text-uppercase border-start border-5 border-primary ps-3 mb-4">Quick Links</h5>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-body mb-2" href="{{ route('home') }}"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                        <a class="text-body mb-2" href="{{ route('about') }}"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>           
                        <a class="text-body mb-2" href="{{ route('products') }}"><i class="bi bi-arrow-right text-primary me-2"></i>Products</a>

                        <a class="text-body mb-2" href="{{ route('cart') }}"><i class="bi bi-arrow-right text-primary me-2"></i>Cart</a>

                    </div>
                </div>
 
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-uppercase border-start border-5 border-primary ps-3 mb-4">Follow Us</h5>
            
                   
                    <div class="d-flex">
                        <a class="btn btn-outline-primary btn-square me-2" href="#"><i class="bi bi-twitter"></i></a>
                        <a class="btn btn-outline-primary btn-square me-2" href="#"><i class="bi bi-facebook"></i></a>
                        <a class="btn btn-outline-primary btn-square me-2" href="#"><i class="bi bi-linkedin"></i></a>
                        <a class="btn btn-outline-primary btn-square" href="#"><i class="bi bi-instagram"></i></a>
                    </div>
                </div>
             
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="" class="btn btn-primary py-3 fs-4 back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>