@extends('frontend.layouts.app')

@section('title')

@endsection

@section('seo')
<title>Registration | Bonfire Charcoal: Ignite Culinary Excellence with Premium Briquets for Grilling Perfection</title>
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
<div class="row">
    <div class="col-lg-6">
        <div class="banner">

        </div>

        <style>
            .banner {
                background-image: url("{{ asset('images/banner-contact-cart.jpg') }}");
                height: 60vh;
                background-position: center;
                background-size: cover;

                display: flex;
                justify-content: center;
                align-items: center;
            }
        </style>
    </div>
    <div class="col-lg-6 bg-body-tertiary">
        <div class="row pt-5 bg-body-tertiary">
            <div class="col-lg-7 px-lg-2 px-4">
                <h4 class="fw-bold">Login</h4>

                <br>
                @if (Session::has('success'))
                <div class="alert alert-success alert-dismissible">
                    {{-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button> --}}
                    <h5><i class="icon fas fa-check"></i> Success!</h5>
                    {{ Session::get('success') }}
                  </div>
                @endif
                {{-- <h5>Profile Details</h5> --}}
                <div style="border:1px solid #f6b024;"></div>

                <div class="row my-3 gy-2">
                    <div class="col-md-12">
                        <div class="form-group position-relative mb-2">
                            <input type="text" name="fname" class="form-control rounded-0 pt-3" id="fname" style="border-width: 2px; height: 55px;">
                            <label for="fname" class="text-black placeholder-label">Email Address*</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group position-relative mb-2">
                            <input type="text" name="lname" class="form-control rounded-0 pt-3" id="lname" style="border-width: 2px; height: 55px;">
                            <label for="lname" class="text-black placeholder-label">Password</label>
                        </div>
                    </div>
                    {{-- <div class="col-md-6">
                        <div class="form-group position-relative mb-2">
                            <input type="email" name="email" class="form-control rounded-0 pt-3" id="email" style="border-width: 2px; height: 55px;">
                            <label for="email" class="text-black placeholder-label">Email Address*</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group position-relative mb-2">
                            <input type="number" name="number" class="form-control rounded-0 pt-3" id="number" style="border-width: 2px; height: 55px;">
                            <label for="number" class="text-black placeholder-label">Phone Number*</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group position-relative mb-2">
                            <input type="password" name="password" class="form-control rounded-0 pt-3" id="password" style="border-width: 2px; height: 55px;">
                            <label for="password" class="text-black placeholder-label">Password*</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group position-relative mb-2">
                            <input type="password" name="password" class="form-control rounded-0 pt-3" id="password" style="border-width: 2px; height: 55px;">
                            <label for="password" class="text-black placeholder-label">Confirm Password*</label>
                        </div>
                    </div> --}}

                    <p>No Account yet? <a href="{{url('registration')}}">Register Here</a></p>
                    <div class="row justify-content-center align-items-center p-3">
                        <a href="{{ url('account') }}" class="btn btn-primary fs-4 px-5 w-auto">Login</a>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

<style>
    /* Additional CSS to style the placeholder label */
    .placeholder-label {
        position: absolute;
        top: 0;
        left: 0;
        padding: 8px;
        transition: all 0.3s ease;
        pointer-events: none;
        /* Ensure the label doesn't interfere with input focus */
    }

    .form-control:focus+.placeholder-label,
    .form-control:not(:placeholder-shown)+.placeholder-label {
        transform: translateY(-0.5em) scale(0.8);
        color: #ccc;
    }
</style>
@endsection