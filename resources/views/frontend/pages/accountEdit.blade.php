@extends('frontend.layouts.app')

@section('title')

@endsection

@section('seo')
<title>Settings | Bonfire Charcoal: Ignite Culinary Excellence with Premium Briquets for Grilling Perfection</title>
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
    <div class="col-lg-2 p-0">
        <div class="banner">

        </div>

        <style>
            .banner {
                background-image: url("{{ asset('images/bg-1.jpg') }}");
                height: 100%;
                background-position: 0 0;
                background-size: cover;

                display: flex;
                justify-content: center;
                align-items: center;
            }
        </style>
    </div>
    <div class="col-lg-10 bg-body-tertiary">
        <div class="row">
            <div class="col-lg-2 p-0 border test-border">
                <br>
                <img src="{{ asset('images/logo-header.png') }}" class="d-block align-middle img-fluid mx-auto" alt="...">
                <br>
                <div class="d-flex flex-column">
                    <a href="{{ url('user/account') }}" class="btn w-100 rounded-0 profile-button border-0 {{ request()->is('user/account') ? 'active' : '' }}" onmouseover="changeImage('cartImage1', true)" onmouseout="changeImage('cartImage1', false)">
                        <div class="d-flex justify-content-start align-items-center px-5 py-1">
                            <span class=""><img src="{{ asset('images/icon-blck-dashboard.png') }}" class="d-block align-middle img-fluid me-2" alt="..." id="cartImage1"></span>
                            <span class="">My Dashboard</span>
                        </div>
                    </a>
                    <a href="{{ url('user/settings') }}" class="btn w-100 rounded-0 profile-button border-0 {{ request()->is('user/settings') ? 'active' : '' }}" onmouseover="changeImage2('cartImage2', true)" onmouseout="changeImage2('cartImage2', false)">
                        <div class="d-flex justify-content-start align-items-center px-5 py-1">
                            <span class=""><img src="{{ asset('images/icon-blck-setting.png') }}" class="d-block align-middle img-fluid me-2" alt="..." id="cartImage2"></span>
                            <span class="">Profile Settings</span>
                        </div>
                    </a>
                    <a class="btn w-100 rounded-0 profile-button border-0 {{ request()->is('user/support') ? 'active' : '' }}" onmouseover="changeImage3('cartImage3', true)" onmouseout="changeImage3('cartImage3', false)">
                        <div class="d-flex justify-content-start align-items-center px-5 py-1">
                            <span class=""><img src="{{ asset('images/icon-blck-support.png') }}" class="d-block align-middle img-fluid me-2" alt="..." id="cartImage3"></span>
                            <span class="">Support</span>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-10 p-0 border test-border bg-body-secondary" style="height:auto">
                <div class="row py-5 px-4">
                    <div class="col-lg-10">
                        <div class="row bg-white rounded-2">
                            <div class="col-lg-5">
                                <div class="p-5 bg-white rounded">
                                    <img src="{{ asset('images/img-profile.png') }}" class="d-block align-middle img-fluid mx-auto w-100" alt="...">
                                    <br>

                                    <div class="d-flex justify-content-center align-items-center">
                                        <h5 class="mb-0 me-3">Upload Profile Picture</h5>
                                        <a href="{{ url('account') }}">
                                            <img src="{{ asset('images/button-upload.png') }}" class="d-block align-middle img-fluid" alt="...">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="p-5 bg-white rounded">
                                    {{-- <h4>Shipping Information</h4> --}}
                                    <br>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group mb-2">
                                                <label for="fname" class="text-black placeholder-label">First Name</label>
                                                <input type="text" name="fname" class="form-control rounded-0" id="fname" style="border: none; border-bottom: solid #f6b024 2px; height: 40px;">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group mb-2">
                                                <label for="lname" class="text-black placeholder-label">Last Name</label>
                                                <input type="text" name="lname" class="form-control rounded-0" id="lname" style="border: none; border-bottom: solid #f6b024 2px; height: 40px;">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group mb-2">
                                                <label for="province" class="text-black placeholder-label">State/Province</label>
                                                <input type="text" name="province" class="form-control rounded-0" id="province" style="border: none; border-bottom: solid #f6b024 2px; height: 40px;">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group mb-2">
                                                <label for="city" class="text-black placeholder-label">City/Municipality</label>
                                                <input type="text" name="city" class="form-control rounded-0" id="city" style="border: none; border-bottom: solid #f6b024 2px; height: 40px;">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group mb-2">
                                                <label for="barangay" class="text-black placeholder-label">Barangay</label>
                                                <input type="text" name="barangay" class="form-control rounded-0" id="barangay" style="border: none; border-bottom: solid #f6b024 2px; height: 40px;">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group mb-2">
                                                <label for="address" class="text-black placeholder-label">Complete Address</label>
                                                <input type="text" name="address" class="form-control rounded-0" id="address" style="border: none; border-bottom: solid #f6b024 2px; height: 40px;">
                                                <label for="address" class="text-secondary placeholder-label">Ex: Block No./Unit No., Street, Residence, Barangay, City/Town, Province</label>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group mb-2">
                                                <label for="email" class="text-black placeholder-label">Email Address</label>
                                                <input type="email" name="email" class="form-control rounded-0" id="email" style="border: none; border-bottom: solid #f6b024 2px; height: 40px;">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group mb-2">
                                                <label for="number" class="text-black placeholder-label">Phone Number</label>
                                                <input type="number" name="number" class="form-control rounded-0" id="number" style="border: none; border-bottom: solid #f6b024 2px; height: 40px;">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group mb-2">
                                                <label for="password" class="text-black placeholder-label">Password</label>
                                                <input type="password" name="password" class="form-control rounded-0" id="password" style="border: none; border-bottom: solid #f6b024 2px; height: 40px;">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group mb-2">
                                                <label for="confirmPassword" class="text-black placeholder-label">Confirm Password</label>
                                                <input type="password" name="confirmPassword" class="form-control rounded-0" id="confirmPassword" style="border: none; border-bottom: solid #f6b024 2px; height: 40px;">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row justify-content-start align-items-center pt-5">
                                        <a href="{{ url('account') }}" class="btn btn-primary fs-4 px-5 w-auto">SAVE</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

<style>
    .test-border {}
</style>

@endsection

@section('js')
<script>
    function changeImage(imageId1, isHovered) {
        var cartImage1 = document.getElementById(imageId1);
        if (isHovered) {
            // Change the image source on hover
            cartImage1.src = "{{ asset('images/icon-white-dashboard.png') }}";
        } else {
            // Change it back when not hovering
            cartImage1.src = "{{ asset('images/icon-blck-dashboard.png') }}";
        }
    }

    function changeImage2(imageId2, isHovered) {
        var cartImage2 = document.getElementById(imageId2);
        if (isHovered) {
            // Change the image source on hover
            cartImage2.src = "{{ asset('images/icon-white-settings.png') }}";
        } else {
            // Change it back when not hovering
            cartImage2.src = "{{ asset('images/icon-blck-setting.png') }}";
        }
    }

    function changeImage3(imageId3, isHovered) {
        var cartImage3 = document.getElementById(imageId3);
        if (isHovered) {
            // Change the image source on hover
            cartImage3.src = "{{ asset('images/icon-white-support.png') }}";
        } else {
            // Change it back when not hovering
            cartImage3.src = "{{ asset('images/icon-blck-support.png') }}";
        }
    }
</script>
@endsection