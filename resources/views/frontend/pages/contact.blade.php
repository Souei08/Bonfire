@extends('frontend.layouts.app')

@section('title')

@endsection

@section('seo')
<title>Contact Us | Bonfire Charcoal: Ignite Culinary Excellence with Premium Briquets for Grilling Perfection</title>
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
            <h1 class="text-white" style="font-size: 75px;">CONTACT US</h1>
        </div>
        <div class="col-lg-12">
            <div class="d-flex align-items-center justify-content-center">
                <h3 class="text-white mb-0">Home</h3>
                <img src="{{ asset('images/icon-header-1.png') }}" class="d-block align-middle img-fluid" alt="...">
                <h3 class="yellow mb-0">Contact Us</h3>
            </div>
        </div>
    </div>
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

<div class="container py-5">
    <div class="text-center">
        <h4 style="font-weight: 700;">GET IN TOUCH</h4>
        <br>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorum eligendi nulla voluptatum obcaecati,
            at amet, ea rerum corporis mollitia assumenda vitae possimus corrupti error nesciunt ipsa perspiciatis libero iure? Beatae!</p>
        <h5 style="font-weight: 700;">Follow Us</h5>
        <br>

        <div class="d-flex justify-content-center">
            <a href="" class="mx-4">
                <img src="{{ asset('images/icon-fb2.png') }}" class="d-block align-middle img-fluid" alt="...">
            </a>
            <a href="" class="mx-4">
                <img src="{{ asset('images/icon-linkedin.png') }}" class="d-block align-middle img-fluid" alt="...">
            </a>
            <a href="" class="mx-4">
                <img src="{{ asset('images/icon-ig2.png') }}" class="d-block align-middle img-fluid" alt="...">
            </a>
            <a href="" class="mx-4">
                <img src="{{ asset('images/icon-tiktok.png') }}" class="d-block align-middle img-fluid" alt="...">
            </a>
        </div>
        <br>
        <br>
        <hr style="border: #f6b024 2px solid;">
        <br>

        <div class="row justify-content-center gy-3">
            <div class="col-lg-4">
                <div style="background-color: #fdefd3; width: 290px; height: 190px;" class="mt-4 mx-auto rounded-2">
                    <img src="{{ asset('images/obj-1.png') }}" class="d-block align-middle img-fluid mx-auto icon" alt="...">
                    <div class="px-4 pb-2">
                        <h5 style="font-weight: 700;">Our Location</h5>
                        <br>
                        <p class="text-secondary">Crossing Bayabas, Toril, Davao City, 8000 Philippines</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div style="background-color: #fdefd3; width: 290px; height: 190px;" class="mt-4 mx-auto rounded-2">
                    <img src="{{ asset('images/obj-2.png') }}" class="d-block align-middle img-fluid mx-auto icon" alt="...">
                    <div class="px-4 pb-2">
                        <h5 style="font-weight: 700;">Call Us</h5>
                        <br>
                        <p class="text-secondary">+6382 2911 688</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div style="background-color: #fdefd3; width: 290px; height: 190px;" class="mt-4 mx-auto rounded-2">
                    <img src="{{ asset('images/obj-3.png') }}" class="d-block align-middle img-fluid mx-auto icon" alt="...">
                    <div class="px-4 pb-2">
                        <h5 style="font-weight: 700;">Mail Us</h5>
                        <br>
                        <p class="text-secondary">info@bfi.com.ph</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<style>
    .icon {
        transform: translate(0px, -30px);
    }
</style>

<div class="bg-contact">
    <div class="container">
        <div class="row justify-content-center text-center py-5">
            <h4 class="mb-0 fw-bold yellow" style="font-size: 50px;">Question and Support</h4>
        </div>
    </div>
</div>

<style>
    .bg-contact {
        background-image: url("{{ asset('images/bg-body.jpg') }}");
        height: 35vh;
        background-position: center;
        background-size: cover;

        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>

<div class="container py-5">
    @if (Session::has('success'))
    <div class="alert alert-success alert-dismissible">
        <h5> Success!</h5>
        {{ Session::get('success') }}
      </div>
    @endif
    <form action={{url('add-contact')}} method="POST">@csrf
        <div class="row g-3">
            <div class="col-sm-6">
                <div class="input-group">
                    <span class="input-group-text border-end-0 rounded-0 bg-white" id="basic-addon1">
                        <img src="{{ asset('images/icon-user.jpg') }}" class="d-block align-middle img-fluid" alt="...">
                    </span>
                    <input type="text" class="form-control rounded-end-0" name="name" id="name" placeholder="Your Name" value="" >
                </div>
                @error('name')
                <span class="text-danger">
                    {{ $message }}
                </span>
                @enderror
            </div>
            <div class="col-sm-6">
                <div class="input-group">
                    <span class="input-group-text border-end-0 rounded-0 bg-white" id="basic-addon1">
                        <img src="{{ asset('images/icon-email.jpg') }}" class="d-block align-middle img-fluid" alt="...">
                    </span>
                    <input type="email" class="form-control rounded-end-0" name="email" id="email" placeholder="Email Address" value="" >
                </div>
                @error('email')
                <span class="text-danger">
                    {{ $message }}
                </span>
                @enderror
            </div>
            <div class="col-sm-12">
                <div class="input-group">
                    <span class="input-group-text border-end-0 rounded-0 bg-white" id="basic-addon1">
                        <img src="{{ asset('images/icon-subject.jpg') }}" class="d-block align-middle img-fluid" alt="...">
                    </span>
                    <input type="text" class="form-control rounded-end-0" name="subject" id="subject" placeholder="Subject" value="" >
                </div>
                @error('subject')
                <span class="text-danger">
                    {{ $message }}
                </span>
                @enderror
            </div>
            <div class="col-sm-12">
                <div class="input-group">
                    <span class="input-group-text border-end-0 rounded-0 bg-white align-items-start pt-2" id="basic-addon1">
                        <img src="{{ asset('images/icon-message.jpg') }}" class="d-block align-middle img-fluid" alt="...">
                    </span>
                    <textarea type="text" class="form-control rounded-end-0" name="message" id="name" placeholder="Message" value="" ></textarea>
                </div>
                @error('message')
                <span class="text-danger">
                    {{ $message }}
                </span>
                @enderror
            </div>
        </div>
        <div class="row align-items-end justify-content-center py-4">
            <button type="submit" class="btn btn-primary-3 fs-4 px-4 w-auto d-flex align-items-center">
                <span class="span-text">SUBMIT NOW</span>
            </button>
        </div>
    </form>
</div>

<div>
    <iframe class="w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15839.62784331234!2d125.49527319999999!3d7.02022195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32f90c39869b09f9%3A0x1e9d999d51e7ea2f!2sCrossing%20Bayabas%2C%20Toril%2C%20Davao%20City%2C%20Davao%20del%20Sur!5e0!3m2!1sen!2sph!4v1703226259526!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
@endsection