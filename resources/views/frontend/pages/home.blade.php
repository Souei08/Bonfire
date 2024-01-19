@extends('frontend.layouts.app')

@section('title')

@endsection

@section('seo')
<title>Home | Bonfire Charcoal: Ignite Culinary Excellence with Premium Briquets for Grilling Perfection</title>
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
<link rel="stylesheet" href="{{asset('css/home.css')}}">

<div class="banner position-relative">
    <img src="{{ asset('images/bg-about.jpg') }}" class="d-block align-middle img-fluid" alt="..." style="filter: sepia(100%);">
</div>

<div class="position-absolute start-50 banner-video">
    <div class="d-flex gap-5">

        <div class="">
            <a href="{{ url('about') }}" class="btn btn-primary-2 fs-4 px-5 w-auto">LEARN MORE</a>
        </div>

        <div class="">
            <a href="{{ url('shop') }}" class="btn btn-primary-2 fs-4 px-5 w-auto"><i class="fa-solid fa-cart-shopping" style="font-size: 17px;"></i> SHOP NOW</a>
        </div>

    </div>
</div>

<style>
    .banner-video {
        transform: translateY(-145px) translateX(-200px);
    }

    @media (max-width: 768px) {
        .banner-video {
            display: none;
        }
    }
</style>

<div class="home-bg">
    <div class="container">
        <div class="row align-items-center justify-content-center text-white p-4">
            <div class="col-lg-6">
                <div class="text-center">
                    <img src="{{ asset('images/logo-body.png') }}" class="d-block align-middle img-fluid mx-auto" alt="..."> <br>
                    <h4 class=""><b>"Transforming local products to global standards"</b></h4> <br>
                    <img src="{{ asset('images/img-about.png') }}" class="d-block align-middle img-fluid" alt="...">
                </div>
            </div>
            <div class="col-lg-6">
                <p class="fs-5">BF Indutsries, Inc. was established in 1972 as a sole - proprietorship business by Mr. Bonifacio P. Fernandez, Sr.
                    under the name of BF ENTERPRISES. It was later incorporated in March 23, 1979, as BF INDUSTRIES, INC., (BFI).
                </p>

                <p class="fs-5">The company started out as a corn and rice by-products trading business to serve nearby piggery and poultry farms with
                    2 employees and a jeep with a trailer as its delivery vehicle. From 1975 to 1980, it was engaged in rice milling and copra trading.
                </p>

                <br>

                <a href="{{ url('about') }}" class="btn btn-outline-primary fs-4 px-5">LEARN MORE</a>
            </div>
        </div>

    </div>
</div>

<div class="bg-white">
    <div class="container">
        <div class="row justify-content-center align-items-center p-3 gy-3">
            <div class="col-lg-4">
                <div class="bg-hexagon card-hover p-3 text-white shadow rounded">
                    <h4 class=""><b>HEXAGONAL BRIQUETS</b></h4>

                    <p class="text-center p-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ipsum dolor sit amet consectetur adipiscing elit. Molestie nunc non blandit
                    </p>

                    <a href="{{ url('products#hexagonal-briquets-section') }}"><i class="fa-solid fa-circle-arrow-right fs-1" style="color: white;"></i></a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="bg-shisha card-hover p-3 text-white shadow rounded">
                    <h4 class=""><b>SHISHA BRIQUETS</b></h4>

                    <p class="text-center p-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ipsum dolor sit amet consectetur adipiscing elit. Molestie nunc non blandit
                    </p>

                    <a href="{{ url('products#shisha-briquets-section') }}"><i class="fa-solid fa-circle-arrow-right fs-1" style="color: white;"></i></a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="bg-pillow card-hover p-3 text-white shadow rounded">
                    <h4 class=""><b>PILLOW BRIQUETS</b></h4>

                    <p class="text-center p-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ipsum dolor sit amet consectetur adipiscing elit. Molestie nunc non blandit
                    </p>

                    <a href="{{ url('products#pillow-briquets-section') }}"><i class="fa-solid fa-circle-arrow-right fs-1" style="color: white;"></i></a>
                </div>
            </div>
        </div>
        <div class="row justify-content-center align-items-center p-3">
            <a href="{{ url('products') }}" class="btn btn-primary fs-4 px-5 w-auto">VIEW PRODUCTS</a>
        </div>
    </div>
</div>

<div class="bg-logos">
    <!-- <div class="d-flex justify-content-center align-items-center px-3 py-5 flex-wrap gap-4">
        <img src="{{ asset('images/logo-kosher.png') }}" class="d-block align-middle img-fluid mx-4" alt="...">
        <img src="{{ asset('images/logo-dccci.png') }}" class="d-block align-middle img-fluid mx-4" alt="...">
        <img src="{{ asset('images/logo-eccp.png') }}" class="d-block align-middle img-fluid mx-4" alt="...">
        <img src="{{ asset('images/logo-idcp.png') }}" class="d-block align-middle img-fluid mx-4" alt="...">
        <img src="{{ asset('images/logo-philexport.png') }}" class="d-block align-middle img-fluid mx-4" alt="...">
        <img src="{{ asset('images/logo-iqnet.png') }}" class="d-block align-middle img-fluid mx-4" alt="...">
    </div> -->
    <div class="slider">
        <div class="slide-track">
            <div class="slides d-flex align-items-center mx-4">
                <img src="{{ asset('images/logo-kosher.png') }}" class="img-fluid" width="200" alt="" />
            </div>
            <div class="slides d-flex align-items-center mx-4">
                <img src="{{ asset('images/logo-dccci.png') }}" class="img-fluid" width="200" alt="img" />
            </div>
            <div class="slides d-flex align-items-center mx-4">
                <img src="{{ asset('images/logo-eccp.png') }}" class="img-fluid" width="200" alt="" />
            </div>
            <div class="slides d-flex align-items-center mx-4">
                <img src="{{ asset('images/logo-idcp.png') }}" class="img-fluid" width="200" alt="" />
            </div>

            <div class="slides d-flex align-items-center mx-4">
                <img src="{{ asset('images/logo-philexport.png') }}" class="img-fluid" width="200" alt="" />
            </div>
            <div class="slides d-flex align-items-center mx-4">
                <img src="{{ asset('images/logo-iqnet.png') }}" class="img-fluid" width="200" alt="img" />
            </div>


            <div class="slides d-flex align-items-center mx-4">
                <img src="{{ asset('images/logo-kosher.png') }}" class="img-fluid" width="200" alt="" />
            </div>
            <div class="slides d-flex align-items-center mx-4">
                <img src="{{ asset('images/logo-dccci.png') }}" class="img-fluid" width="200" alt="img" />
            </div>
            <div class="slides d-flex align-items-center mx-4">
                <img src="{{ asset('images/logo-eccp.png') }}" class="img-fluid" width="200" alt="" />
            </div>
            <div class="slides d-flex align-items-center mx-4">
                <img src="{{ asset('images/logo-idcp.png') }}" class="img-fluid" width="200" alt="" />
            </div>

            <div class="slides d-flex align-items-center mx-4">
                <img src="{{ asset('images/logo-philexport.png') }}" class="img-fluid" width="200" alt="" />
            </div>
            <div class="slides d-flex align-items-center mx-4">
                <img src="{{ asset('images/logo-iqnet.png') }}" class="img-fluid" width="200" alt="img" />
            </div>
        </div>
    </div>
</div>

<div>
    <iframe class="w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15839.62784331234!2d125.49527319999999!3d7.02022195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32f90c39869b09f9%3A0x1e9d999d51e7ea2f!2sCrossing%20Bayabas%2C%20Toril%2C%20Davao%20City%2C%20Davao%20del%20Sur!5e0!3m2!1sen!2sph!4v1703226259526!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>



<style>
    .home-bg {
        background-image: url("{{ asset('images/bg-about.jpg') }}");
        height: auto;
        background-position: center;
        background-size: cover;

        display: flex;
        justify-content: center;
        align-items: center;

    }

    @media (max-width: 768px) {
        .home-bg {
            height: auto;
        }
    }

    .bg-hexagon {
        position: relative;
        overflow: hidden;
        background-image: url("{{ asset('images/img-product-1.png') }}");
        height: 400px;
        background-position: center;
        background-size: cover;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        transition: height 0.3s ease;
    }

    .bg-shisha {
        position: relative;
        overflow: hidden;
        background-image: url("{{ asset('images/img-product-2.png') }}");
        height: 400px;
        background-position: center;
        background-size: cover;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        transition: height 0.3s ease;
    }

    .bg-pillow {
        position: relative;
        overflow: hidden;
        background-image: url("{{ asset('images/img-product-3.png') }}");
        height: 400px;
        background-position: center;
        background-size: cover;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        transition: height 0.3s ease;
    }

    .bg-logos {
        background-image: url("{{ asset('images/bg-logo.jpg') }}");
        height: 300px;
        background-position: center;
        background-size: cover;

        display: flex;
        justify-content: center;
        align-items: center;

    }
</style>

@endsection