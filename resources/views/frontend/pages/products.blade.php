@extends('frontend.layouts.app')

@section('title')

@endsection

@section('seo')
<title>Products | Bonfire Charcoal: Ignite Culinary Excellence with Premium Briquets for Grilling Perfection</title>
<meta property="og:locale" content="en_US" />
<meta property="og:url" content="" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Bonfire Charcoal: Ignite Culinary Excellence with Premium Briquets for Grilling Perfection" />
<meta property="og:description" content="Experience the unmatched quality of Bonfire Charcoal Briquets, crafted since 1991 for grill enthusiasts and culinary businesses. Immerse yourself in the warmth and reliability of Bonfire, fostering togetherness and sustainable grilling practices. Elevate your BBQ with our premium charcoal and create unforgettable moments around the grill." />
<meta property="og:site_name" content="Bonfire Charcoal: Ignite Culinary Excellence with Premium Briquets for Grilling Perfection" />
<meta property="og:image" content="{{ asset('images/thumbnail.jpg') }}" />
<meta property="og:thumbnail" content="{{ asset('images/thumbnail.jpg') }}" />
<meta property="og:keywords" content="Bonfire Charcoal, Premium Charcoal Briquets, Grilling Excellence, Culinary Businesses, Sustainable Grilling, Quality BBQ Fuel, Family Togetherness, Grill Enthusiasts, Unforgettable BBQ Moments, Bonfire Legacy" />
@endsection

@section('content')
<div class="banner">
    <div class="row justify-content-center">
        <div class="col-lg-12 text-center">
            <h1 class="text-white" style="font-size: 75px;">PRODUCTS</h1>
        </div>
        <div class="col-lg-12">
            <div class="d-flex align-items-center justify-content-center">
                <h3 class="text-white mb-0">Home</h3>
                <img src="{{ asset('images/icon-header-1.png') }}" class="d-block align-middle img-fluid" alt="...">
                <h3 class="yellow mb-0">Products</h3>
            </div>
        </div>
    </div>
</div>

<style>
    .banner {
        background-image: url("{{ asset('images/banner-products.jpg') }}");
        height: 60vh;
        background-position: center;
        background-size: cover;

        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>

<div class="py-5" id="hexagonal-briquets-section">
    <div class="container">
        <div class="text-center">
            <h4 class="fw-bold">HEXAGONAL BRIQUETS</h4>
            <br>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqu.
                Aenean euismod elementum nisi quis eleifend quam. Facilisi cras fermentum odio feugiat pretium nibh inpsum. Id consectetur
                purus ut faucibus pulvinar elementum integer. Gravida neque convallis a cras semper.
            </p>
        </div>
    </div>

    <br><br>

    <section class="splide splide4" aria-label="Splide Basic HTML Example" data-aos="zoom-in-up">
        <div class="splide__track">
            <ul class="splide__list text-center gap-2">
                <li class="splide__slide"><img src="{{ asset('images/img-hex-1.png') }}" class="img-fluid" alt="Vacation Image"></li>
                <li class="splide__slide"><img src="{{ asset('images/img-hex-2.png') }}" class="img-fluid" alt="Vacation Image"></li>
                <li class="splide__slide"><img src="{{ asset('images/img-hex-3.png') }}" class="img-fluid" alt="Vacation Image"></li>
                <li class="splide__slide"><img src="{{ asset('images/img-hex-4.png') }}" class="img-fluid" alt="Vacation Image"></li>
                <li class="splide__slide"><img src="{{ asset('images/img-hex-5.png') }}" class="img-fluid" alt="Vacation Image"></li>
            </ul>
        </div>
    </section>

    <div class="row justify-content-center align-items-center p-3">
        <a href="{{ url('shop') }}" class="btn btn-primary-3 fs-4 px-5 w-auto d-flex align-items-center" onmouseover="changeImage('cartImage1', true)" onmouseout="changeImage('cartImage1', false)">
            <span class="span-text">GO TO SHOP</span>
            <img id="cartImage1" src="{{ asset('images/icon-cart-2.png') }}" class="d-block align-middle img-fluid mx-1" alt="...">
        </a>
    </div>
</div>

<div class="py-5" id="shisha-briquets-section">
    <div class="container">
        <div class="text-center">
            <h4 class="fw-bold">SHISHA BRIQUETS</h4>
            <br>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqu.
                Aenean euismod elementum nisi quis eleifend quam. Facilisi cras fermentum odio feugiat pretium nibh inpsum. Id consectetur
                purus ut faucibus pulvinar elementum integer. Gravida neque convallis a cras semper.
            </p>
        </div>
    </div>

    <br><br>

    <section class="splide splide5" aria-label="Splide Basic HTML Example" data-aos="zoom-in-up">
        <div class="splide__track">
            <ul class="splide__list text-center gap-2">
                <li class="splide__slide"><img src="{{ asset('images/img-shisha-1.png') }}" class="img-fluid" alt="Vacation Image"></li>
                <li class="splide__slide"><img src="{{ asset('images/img-shisha-2.png') }}" class="img-fluid" alt="Vacation Image"></li>
                <li class="splide__slide"><img src="{{ asset('images/img-shisha-3.png') }}" class="img-fluid" alt="Vacation Image"></li>
                <li class="splide__slide"><img src="{{ asset('images/img-shisha-4.png') }}" class="img-fluid" alt="Vacation Image"></li>
                <li class="splide__slide"><img src="{{ asset('images/img-shisha-5.png') }}" class="img-fluid" alt="Vacation Image"></li>
            </ul>
        </div>
    </section>

    <div class="row justify-content-center align-items-center p-3">
        <a href="{{ url('shop') }}" class="btn btn-primary-3 fs-4 px-5 w-auto d-flex align-items-center" onmouseover="changeImage('cartImage2', true)" onmouseout="changeImage('cartImage2', false)">
            <span class="span-text">GO TO SHOP</span>
            <img id="cartImage2" src="{{ asset('images/icon-cart-2.png') }}" class="d-block align-middle img-fluid mx-1" alt="...">
        </a>
    </div>
</div>

<div class="py-5" id="pillow-briquets-section">
    <div class="container">
        <div class="text-center">
            <h4 class="fw-bold">PILLOW BRIQUETS</h4>
            <br>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqu.
                Aenean euismod elementum nisi quis eleifend quam. Facilisi cras fermentum odio feugiat pretium nibh inpsum. Id consectetur
                purus ut faucibus pulvinar elementum integer. Gravida neque convallis a cras semper.
            </p>
        </div>
    </div>

    <br><br>

    <section class="splide splide6" aria-label="Splide Basic HTML Example" data-aos="zoom-in-up">
        <div class="splide__track">
            <ul class="splide__list text-center gap-2">
                <li class="splide__slide"><img src="{{ asset('images/img-pillow-1.png') }}" class="img-fluid" alt="Vacation Image"></li>
                <li class="splide__slide"><img src="{{ asset('images/img-pillow-2.png') }}" class="img-fluid" alt="Vacation Image"></li>
                <li class="splide__slide"><img src="{{ asset('images/img-pillow-3.png') }}" class="img-fluid" alt="Vacation Image"></li>
                <li class="splide__slide"><img src="{{ asset('images/img-pillow-4.png') }}" class="img-fluid" alt="Vacation Image"></li>
                <li class="splide__slide"><img src="{{ asset('images/img-pillow-5.png') }}" class="img-fluid" alt="Vacation Image"></li>
            </ul>
        </div>
    </section>

    <div class="row justify-content-center align-items-center p-3">
        <a href="{{ url('shop') }}" class="btn btn-primary-3 fs-4 px-5 w-auto d-flex align-items-center" onmouseover="changeImage('cartImage3', true)" onmouseout="changeImage('cartImage3', false)">
            <span class="span-text">GO TO SHOP</span>
            <img id="cartImage3" src="{{ asset('images/icon-cart-2.png') }}" class="d-block align-middle img-fluid mx-1" alt="...">
        </a>
    </div>
</div>

@endsection

@section('js')
<script>
    var splide4 = new Splide('.splide4', {
        type: 'loop',
        height: '30rem',
        focus: 'center',
        autoWidth: true,
        autoplay: true,
        pagination: false,
    });

    splide4.mount();

    var splide5 = new Splide('.splide5', {
        type: 'loop',
        height: '30rem',
        focus: 'center',
        autoWidth: true,
        autoplay: true,
        pagination: false,
    });

    splide5.mount();

    var splide6 = new Splide('.splide6', {
        type: 'loop',
        height: '30rem',
        focus: 'center',
        autoWidth: true,
        autoplay: true,
        pagination: false,
    });

    splide6.mount();
</script>

<script>
    function changeImage(imageId, isHovered) {
        var cartImage = document.getElementById(imageId);
        if (isHovered) {
            // Change the image source on hover
            cartImage.src = "{{ asset('images/icon-cart.png') }}";
        } else {
            // Change it back when not hovering
            cartImage.src = "{{ asset('images/icon-cart-2.png') }}";
        }
    }
</script>
@endsection