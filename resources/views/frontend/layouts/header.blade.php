<div class="d-xl-block d-none">
    <div class="w-100  {{ !in_array(request()->path(), ['account', 'registration', 'settings', 'login-account']) ? 'header-overlay position-absolute top-0 start-50 translate-middle-x' : '' }}" style="font-family: 'Bebas Neue', sans-serif;">
        <nav class="navbar navbar-expand-lg {{ !in_array(request()->path(), ['account', 'registration', 'settings' , 'login-account']) ? 'bg-white bg-opacity-50' : 'bg-black' }}">
            <!-- {{ !request()->is('registration')  ? 'header-overlay position-absolute top-0 start-50 translate-middle-x' : '' }} -->
            <div class="d-flex align-items-center mx-auto py-2">

                <div class="justify-content-center text-center mx-5 d-xl-block d-none"><!-- d-xl-block d-md-block d-none -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{ asset('images/logo-header.png') }}" class="nav-logo" alt="img">
                    </a>
                </div>

                <div class=" d-xl-block d-none"><!-- d-xl-block d-lg-block d-none -->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                            <li class="nav-item mx-3 text-center">
                                <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" aria-current="page" href="{{ url('/') }}">HOME</a>
                            </li>
                            <li class="nav-item mx-3 text-center">
                                <a class="nav-link {{ request()->is('about') ? 'active' : '' }}" href="{{ url('/about') }}">ABOUT</a>
                            </li>
                            <li class="nav-item mx-3 text-center">
                                <a class="nav-link {{ request()->is('products') || request()->is('regular') ? 'active' : '' }}" href="{{ url('products') }}">PRODUCTS </a>
                            </li>
                            <li class="nav-item mx-3 text-center">
                                <a class="nav-link {{ request()->is('brochure') ? 'active' : '' }}" href="https://docs.google.com/forms/d/e/1FAIpQLSdGxxAPdS7Wre8l-uaAiddoLIpJiR4PsgI1GwzPI6GcOgvx2g/viewform">BROCHURE </a>
                            </li>
                            <li class="nav-item mx-3 text-center">
                                <a class="nav-link {{ request()->is('news-and-promotions') ? 'active' : '' }}" href="{{ url('news-and-promotions') }}">NEWS AND PROMOTIONS </a>
                            </li>
                            <li class="nav-item mx-3 text-center">
                                <a class="nav-link {{ request()->is('shop') ? 'active' : '' }}" href="{{ url('shop') }}">SHOP </a>
                            </li>
                            <li class="nav-item mx-3 text-center">
                                <a class="nav-link {{ request()->is('contact') ? 'active' : '' }}" href="{{ url('contact') }}">CONTACT </a>
                            </li>
                            <!-- <li class="nav-item mx-3">
                            <div class="d-flex">
                                <a class="nav-link login {{ request()->is('user-login') ? 'active' : '' }}" href="{{ url('user-login') }}">LOGIN </a>
                                <img src="{{ asset('images/icon-user-nav.png') }}" class="nav-logo" alt="img">
                                <a class="nav-link border mx-2 py-3 px-3" href="{{ url('user-login') }}">BOOK NOW </a>
                            </div>
                        </li> -->
                        </ul>
                    </div>
                </div>

                <div class="d-xl-block d-none"> <!-- d-xl-block d-lg-block d-none -->
                    <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                        <div class="line my-auto" style="border-left: 1px solid #fff; height: 60px;">
                        </div>
                        <style>
                            /* .line {
                                transform: translateY(-1px);
                            } */
                        </style>
                        <li class="nav-item mx-1">

                        </li>
                        <li class="nav-item ms-3">
                            <div class="">
                                <a class="nav-link mx- py- px-" href="{{ url('cart') }}">
                                    <img src="{{ asset('images/button-cart.png') }}" class="nav-logo img-fluid" alt="img">
                                </a>
                            </div>
                        </li>
                        <li class="nav-item me-3">
                            <div class="">
                                <a class="nav-link mx- py- px-" href="{{ url('login-account') }}">
                                    <img src="{{ asset('images/button-user.png') }}" class="nav-logo img-fluid" alt="img">
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>

        </nav>

    </div>
</div>

<style>

</style>

<!-- STICKY NAVBAR -->
<nav id="sticky-nav" class="hidden">

    <ul class="navbar-nav m-auto mb-2 mb-lg-0 container-fluid p-3 gap-2 flex-row justify-content-center">
        <li class="nav-item mx-3">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('images/logo-header.png') }}" class="nav-logo" alt="img">
            </a>
        </li>
        <li class="nav-item mx-3 my-auto">
            <a class="nav-link-sticky {{ request()->is('/') ? 'active' : '' }}" aria-current="page" href="{{ url('/') }}">HOME</a>
        </li>
        <li class="nav-item mx-3 my-auto">
            <a class="nav-link-sticky {{ request()->is('about') ? 'active' : '' }}" href="{{ url('about') }}">ABOUT</a>
        </li>
        <li class="nav-item mx-3 my-auto">
            <a class="nav-link-sticky {{ request()->is('products') || request()->is('regular') ? 'active' : '' }}" href="{{ url('products') }}">PRODUCTS </a>
        </li>
        <li class="nav-item mx-3 my-auto">
            <a class="nav-link-sticky {{ request()->is('brochure') ? 'active' : '' }}" href="https://docs.google.com/forms/d/e/1FAIpQLSdGxxAPdS7Wre8l-uaAiddoLIpJiR4PsgI1GwzPI6GcOgvx2g/viewform">BROCHURE </a>
        </li>
        <li class="nav-item mx-3 my-auto">
            <a class="nav-link-sticky {{ request()->is('news-and-promotions') ? 'active' : '' }}" href="{{ url('news-and-promotions') }}">NEWS AND PROMOTIONS </a>
        </li>
        <li class="nav-item mx-3 my-auto">
            <a class="nav-link-sticky {{ request()->is('shop') ? 'active' : '' }}" href="{{ url('shop') }}">SHOP </a>
        </li>
        <!-- <li class="nav-item mx-3 my-auto">
            <a class="nav-link-sticky {{ request()->is('user-login') ? 'active' : '' }}" href="{{ url('user-login') }}">LOGIN </a>
        </li> -->
        <li class="nav-item mx-3 my-auto">
            <a class="nav-link-sticky {{ request()->is('contact') ? 'active' : '' }}" href="{{ url('contact') }}">CONTACT </a>
        </li>
        <div class="line " style="border-left: 1px solid #fff; height: 70px; transform: translateY(5px);">
        </div>
        <li class="nav-item ms-3">
            <div class="">
                <a class="nav-link mx-1 py- px-" href="{{ url('cart') }}">
                    <img src="{{ asset('images/button-cart.png') }}" class="nav-logo img-fluid" alt="img">
                </a>
            </div>
        </li>
        <li class="nav-item me-3">
            <div class="">
                <a class="nav-link mx-1 py- px-" href="{{ url('login-account') }}">
                    <img src="{{ asset('images/button-user.png') }}" class="nav-logo img-fluid" alt="img">
                </a>
            </div>
        </li>
    </ul>

</nav>

<style>
    .hidden {
        display: none;
    }

    .sticky {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        background-color: transparent;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        background-color: rgba(255, 255, 255, 0.5);
        backdrop-filter: blur(10px);
        z-index: 1000;
        /* Make sure it's above other elements */
        /* background: linear-gradient(to bottom, #060606, transparent); */
    }

    @media (max-width: 768px) {
        .sticky {
            display: none;
        }
    }

    @media (max-width: 1024px) {
        .sticky {
            display: none;
        }
    }

    /* .header-overlay {
        background-color: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(0.1px);
    } */

    .nav-link-sticky {
        text-shadow: 2px 2px 4px gray;
    }
</style>

<script>
    const nav = document.getElementById('sticky-nav');
    const scrollTrigger = 275; // Adjust this value as needed

    window.addEventListener('scroll', () => {
        if (window.pageYOffset > scrollTrigger) {
            nav.classList.add('sticky');
            nav.classList.remove('hidden');
        } else {
            nav.classList.remove('sticky');
            nav.classList.add('hidden');
        }
    });
</script>

<!-- OFFCANVAS MENU -->
<div class="sticky-top">
    <div class="header-overlay w-100 position-absolute top-0 start-50 translate-middle-x bg-white bg-opacity-25 p-3 d-xl-none d-block">

        <div class="d-flex align-items-center justify-content-between">
            <div class="justify-content-center text-center py-2">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('images/logo-header.png') }}" class="img-fluid" alt="img">
                </a>
            </div>

            <div class="text-end">
                <a class="btn btn-primary" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                    <i class="fa-solid fa-bars text-black"></i>
                </a>
            </div>
        </div>

    </div>
</div>


<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header justify-content-end">
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body text-center">
        <a href="{{ url('/') }}">
            <img src="{{ asset('images/logo-header.png') }}" class="nav-logo" alt="img">
        </a>
        <ul class="navbar-nav m-auto mb-2 mb-lg-0 gap-4 mt-5">
            <li class="nav-item mx-3">
                <a class="nav-link-offcanvas {{ request()->is('/') ? 'active' : '' }}" aria-current="page" href="{{ url('/') }}">Home</a>
            </li>
            <li class="nav-item mx-3">
                <a class="nav-link-offcanvas {{ request()->is('about') ? 'active' : '' }}" href="{{ url('/about') }}">About</a>
            </li>
            <li class="nav-item mx-3">
                <a class="nav-link-offcanvas  {{ request()->is('products') || request()->is('regular') ? 'active' : '' }}" href="{{ url('products') }}">Products </a>
            </li>
            <li class="nav-item mx-3">
                <a class="nav-link-offcanvas {{ request()->is('brochure') ? 'active' : '' }}" href="https://docs.google.com/forms/d/e/1FAIpQLSdGxxAPdS7Wre8l-uaAiddoLIpJiR4PsgI1GwzPI6GcOgvx2g/viewform">Brochure </a>
            </li>
            <li class="nav-item mx-3">
                <a class="nav-link-offcanvas {{ request()->is('news-and-promotions') ? 'active' : '' }}" href="{{ url('news-and-promotions') }}">News and Promotions </a>
            </li>
            <li class="nav-item mx-3">
                <a class="nav-link-offcanvas {{ request()->is('shop') ? 'active' : '' }}" href="{{ url('shop') }}">Shop </a>
            </li>
            <li class="nav-item mx-3">
                <a class="nav-link-offcanvas {{ request()->is('contact') ? 'active' : '' }}" href="{{ url('contact') }}">Contact</a>
            </li>
            <br>
            <li class="nav-item mx-3">
                <div class="row justify-content-center">
                    <div class="w-25">
                        <a class="nav-link-offcanvas mx-2 py-3 px-3" href="{{ url('cart') }}" style="border: 1px solid #065fad; background-color: #065fad; border-radius: 100%;">
                            <img src="{{ asset('images/icon-cart.png') }}" class="nav-logo img-fluid" alt="img">
                        </a>
                    </div>
                </div>
            </li>
            <br>
            <li class="nav-item mx-3">
                <div class="row justify-content-center">
                    <div class="w-25">
                        <a class="nav-link-offcanvas mx-2 py-3 px-3" href="{{ url('registration') }}" style="border: 1px solid #065fad; background-color: #065fad; border-radius: 100%;">
                            <img src="{{ asset('images/icon-user.png') }}" class="nav-logo img-fluid" alt="img">
                        </a>
                    </div>
                </div>
            </li>
        </ul>

    </div>
</div>