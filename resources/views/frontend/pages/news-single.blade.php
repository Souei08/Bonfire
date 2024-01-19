@extends('frontend.layouts.app')

@section('title')

@endsection

@section('seo')
<title>News  | Bonfire Charcoal: Ignite Culinary Excellence with Premium Briquets for Grilling Perfection</title>
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
            <h1 class="text-white" style="font-size: 75px;">NEWS</h1>
        </div>
        <div class="col-lg-12">
            <div class="d-flex align-items-center justify-content-center">
                <h3 class="text-white mb-0">Home</h3>
                <img src="{{ asset('images/icon-header-1.png') }}" class="d-block align-middle img-fluid" alt="...">
                <h3 class="yellow mb-0">News</h3>
            </div>
        </div>
    </div>
</div>

<style>
    .banner {
        background-image: url("{{ asset('images/banner-news.jpg') }}");
        height: 60vh;
        background-position: center;
        background-size: cover;

        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>

<div class="container">
    <div class="row py-5">
        <a href="{{ url('news-and-promotions') }}" class="w-auto" style="color: black; text-decoration: underline;">
            <h4 class="mb-0"><i class="fa-solid fa-arrow-turn-up fa-rotate-270"></i> Back</h4>
        </a>
    </div>
</div>

<div class="container">
    <img src="{{ asset('images/img-news.png') }}" class="d-block align-middle img-fluid w-100" alt="...">
    <br>

    <h4 class="fw-bold" style="font-size: 25px;">Set blandit libero volutpat sed cras</h4>

    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqu. Aenean euismod elementum nisi quis eleifend quam.
        Facilisi cras fermentum odio feugiat pretium nibh inpsum. Id consectetur purus ut faucibus pulvinar elementum integer. Gravida neque convallis a cras semper.</p>

    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqu. Aenean euismod elementum nisi quis eleifend quam.
        Facilisi cras fermentum odio feugiat pretium nibh inpsum. Id consectetur purus ut faucibus pulvinar elementum integer. Gravida neque convallis a cras semper.</p>
    <br>
    <h6><b>Jan Cruz |</b> Oct 17, 2023</h6>
</div>

<br><br>
@endsection