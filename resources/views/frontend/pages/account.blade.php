@extends('frontend.layouts.app')

@section('title')

@endsection

@section('seo')
<title>Dashboard | Bonfire Charcoal: Ignite Culinary Excellence with Premium Briquets for Grilling Perfection</title>
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
                    <form action="{{ url('user/logout') }}" method="POST">@csrf
                        <button class="btn w-100 rounded-0 profile-button border-0">
                            <div class="d-flex justify-content-start align-items-center px-5 py-1">
                                {{-- <span class=""><img src="{{ asset('images/icon-blck-support.png') }}" class="d-block align-middle img-fluid me-2" alt="..." id="cartImage3"></span> --}}
                                <span class="">logout</span>
                            </div>
                        </button>
                    </form>
                </div>
            </div>

            <div class="col-lg-10 p-0 border test-border bg-body-secondary" style="height:auto">
                <div class="row py-5 px-4">
                    <div class="col-lg-4">
                        <div class="p-5 bg-white rounded">
                            <img src="{{ asset('images/img-profile.png') }}" class="d-block align-middle img-fluid mx-auto w-100" alt="...">
                            <br>
                            <h4>My Profile</h4>
                            <br>
                            
                            <div class="d-flex justify-content-between py-2" style="border-bottom: 2px solid #f6b024;">
                                <span class="span">{{$user->firstName}} {{$user->lastName}}</span>
                                <span class="span">+{{$user->number}}</span>
                            </div>
                            <br>
                            <div class="d-flex justify-content-between py-2" style="border-bottom: 2px solid #f6b024;">
                                <span class="span">{{$user->email}}</span>
                            </div>
                            
                            <div class="row justify-content-center align-items-center pt-4">
                                <a href="{{ url('user/account/edit') }}" class="btn btn-primary fs-4 px-5 w-auto">EDIT</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="p-5 bg-white rounded">
                            <h4>My Orders</h4>
                            <div style="border:1px solid #f6b024;"></div>
                            <br>

                            <div class="table-responsive">
                                <table class="table table-borderless" style="font-family: 'Roboto', sans-serif;">
                                    <thead>
                                        <tr>
                                            <th scope="col">Order No.</th>
                                            <th scope="col">Item</th>
                                            <th scope="col">Quantity</th>
                                            <th scope="col">Total</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row" class="text-secondary">001</th>
                                            <td>Charcoal Briquets <br><span class="text-secondary">Charcoal Briquets in PP Sack</span></td>
                                            <td>1X</td>
                                            <td>P680</td>
                                            <td class="text-warning">Pending</td>
                                        </tr>
                                        <tr>
                                            <th scope="row"></th>
                                            <td>Charcoal Briquets <br><span class="text-secondary">Charcoal Briquets in PP Sack</span></td>
                                            <td>1X</td>
                                            <td>P680</td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
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