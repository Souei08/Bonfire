<footer class="overflow-hidden">
    <div class="footer-bg ">
        <div class="bg-blue">
            <div class="container py-3">
                <div class="row">
                    <div class="d-flex justify-content-center justify-content-lg-start align-items-center pt-3">
                        <a href="{{ url('/') }}"><img src="{{ asset('images/logo-footer.png') }}" class="img-fluid" alt="footer logo"></a>
                    </div>
                </div>
                <div class="row">
                    <!-- <div class="col-12 col-lg-3 py-4">

                        <div class="d-flex justify-content-center align-items-center mb-3">
                            <a href="{{ url('/') }}"><img src="{{ asset('images/icon-fb.png') }}" class="img-fluid mx-2" alt="" width=""></a>
                            <a href="{{ url('/') }}"><img src="{{ asset('images/icon-x.png') }}" class="img-fluid mx-2" alt="" width=""></a>
                            <a href="{{ url('/') }}"><img src="{{ asset('images/icon-youtube.png') }}" class="img-fluid mx-2" alt="" width=""></a>
                            <a href="{{ url('/') }}"><img src="{{ asset('images/icon-ig.png') }}" class="img-fluid mx-2" alt="" width=""></a>
                        </div>

                    </div> -->

                    <div class="col-12 col-lg-3 col-md-3 py-5 d-flex flex-column">
                        <h4 class="color-mid text-white" style="font-family: 'Bebas Neue', sans-serif;">FOLLOW US</h4><br>

                        <div class="d-flex flex-column justify-content-start">
                            <a href="{{ url('/') }}" class="follow-links mb-3"><img src="{{ asset('images/icon-fb.png') }}" class="img-fluid me-2" alt="" width=""> facebook</a>
                            <a href="{{ url('/') }}" class="follow-links mb-3"><img src="{{ asset('images/icon-x.png') }}" class="img-fluid me-2" alt="" width=""> twitter</a>
                            <a href="{{ url('/') }}" class="follow-links mb-3"><img src="{{ asset('images/icon-youtube.png') }}" class="img-fluid me-2" alt="" width=""> youtube</a>
                            <a href="{{ url('/') }}" class="follow-links mb-3"><img src="{{ asset('images/icon-ig.png') }}" class="img-fluid me-2" alt="" width=""> instagram</a>
                        </div>
                    </div>

                    <div class="col-12 col-lg-3 col-md-3 py-5 d-flex flex-column">
                        <h4 class="color-mid text-white" style="font-family: 'Bebas Neue', sans-serif;">PRODUCTS</h4><br>
                        <div class="row mb-3">
                            <div class="col-lg-12">
                                <p class="text-white" style="font-family: 'Roboto', sans-serif;">Activated Carbon<br>Granulated Charcoal<br>Charcoal Briquets</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-3 col-md-3 py-5">
                        <h4 class="color-mid text-white" style="font-family: 'Bebas Neue', sans-serif;">QUICK LINKS</h4><br>
                        <div class="mb-2"><a href="{{ url('/') }}" class="footer-link">
                                <p style="font-family: 'Roboto', sans-serif;">Home</p>
                            </a></div>
                        <div class="mb-2"><a href="{{ url('/about') }}" class="footer-link">
                                <p style="font-family: 'Roboto', sans-serif;">About</p>
                            </a></div>
                        <div class="mb-2"><a href="{{ url('/products') }}" class="footer-link">
                                <p style="font-family: 'Roboto', sans-serif;">Products</p>
                            </a></div>
                        <div class="mb-2"><a href="{{ url('/shop') }}" class="footer-link">
                                <p style="font-family: 'Roboto', sans-serif;">Brochure</p>
                            </a></div>
                        <div class="mb-2"><a href="{{ url('/shop') }}" class="footer-link">
                                <p style="font-family: 'Roboto', sans-serif;">Shop</p>
                            </a></div>
                        <div class="mb-2"><a href="{{ url('/contact') }}" class="footer-link">
                                <p style="font-family: 'Roboto', sans-serif;">Contact Us</p>
                            </a></div>
                    </div>

                    <div class="col-12 col-lg-3 col-md-3 py-5">
                        <h4 class="color-mid text-white" style="font-family: 'Bebas Neue', sans-serif;">CONTACT US</h4><br>
                        <div class="mb-2">
                            <p class="text-white" style="font-family: 'Roboto', sans-serif;">Crossing Bayabas, Toril, Davao City, 8000 Philippines</p>
                        </div>
                        <div class="mb-2">
                            <p class="text-white" style="font-family: 'Roboto', sans-serif;">+6382 2911 688</p>
                        </div>
                        <div class="mb-2">
                            <p class="text-white" style="font-family: 'Roboto', sans-serif;">info@bfi.com.ph</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="bg-darkblue">
            <div class="container">
                <div class="row p-3">
                    <div class="pb-1 row justify-content-between">
                        <div class="col-lg-6 text-lg-start text-center"><span class="text-white" style="font-family: 'Roboto Condensed', sans-serif;">Copyright © BF Industries, Inc. | Designed & Developed by R Web Solutions Corp.</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>

<style>
    .footer-bg {
        /* background-image: url("{{ asset('images/footer.jpg') }}"); */
        height: 60vh;
        background-position: center;
        background-size: cover;

        /* display: flex;
        justify-content: center;
        align-items: center; */
    }

    @media (max-width: 768px) {
        .footer-bg {
            height: auto;
        }
    }

    .footer-link {
        text-decoration: none;
        color: #fff;
    }

    .footer-link:hover {
        color: #f6b024;
    }
</style>