@extends('frontend.layouts.app')

@section('title')

@endsection

@section('seo')
<title>About | Bonfire Charcoal: Ignite Culinary Excellence with Premium Briquets for Grilling Perfection</title>
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
            <h1 class="text-white" style="font-size: 75px;">ABOUT US</h1>
        </div>
        <div class="col-lg-12">
            <div class="d-flex align-items-center justify-content-center">
                <h3 class="text-white mb-0">Home</h3>
                <img src="{{ asset('images/icon-header-1.png') }}" class="d-block align-middle img-fluid" alt="...">
                <h3 class="yellow mb-0">About</h3>
            </div>
        </div>
    </div>
</div>

<div class="container py-5">
    <div class="text-center">
        <h4 class="fw-bold">INTRODUCTION</h4>
        <br>
        <p>Bonfire Charcoal Briquets, established in 1991, is a pioneering name in the realm of grilling excellence. Born out of passion and perfected through
            relentless dedication, Bonfire offers premium charcoal briquets crafted for grill enthusiasts, samgyupsal lovers, and businesses involved in grilling,
            lechon manok, and lechon baboy. With a warm, fun, and family-centric personality, Bonfire is more than just a charcoal brand; it embodies the spirit
            of togetherness and culinary delight.
        </p>
        <p>
            Bonfire Charcoal Briquets is not just a brand; it's a tradition, a legacy, and a symbol of exceptional grilling experiences. With a rich history,
            unwavering dedication to quality, and a heartwarming focus on togetherness, Bonfire invites you to light up your grills, create delicious memories,
            and celebrate the joy of shared moments with family and friends.
        </p>
    </div>
    <br><br>
    <div class="row justify-content-center gy-3">
        <div class="col-lg-6">
            <img src="{{ asset('images/img-1.png') }}" class="d-block align-middle img-fluid mx-auto" alt="...">
        </div>
        <div class="col-lg-6">
            <img src="{{ asset('images/img-2.png') }}" class="d-block align-middle img-fluid mx-auto" alt="...">
        </div>
    </div>
</div>

<div class="about-timeline py-5">
    <div class="container">
        <div class="row justify-content-center text-center">
            <h1 class="mb-0 border w-auto text-white">BEGIN HERE</h1>
        </div>
        <div class="d-xl-block d-md-none d-none">
            <div class="row">
                <div class="col-lg-4">
                    <div style="height: 25%;">
                        <img src="{{ asset('images/img-3.png') }}" class="d-block align-middle img-fluid mx-auto" alt="...">
                    </div>
                    <br>
                    <div style="height: 25%;">
                        <h4 class="text-white">Strategic Direction</h4>
                        <p class="text-white">Bonfire's strategic direction is clear; to provide buisnesses and individuals with an environmentally friendly barbecue fuel
                            chocie that aligns with their culinary aspirations and business goals. By offering a consistent supply of premium charcoal briquets, Bonfire
                            empowers grilling enthusiasts and culinary businesses to achieve unparalleled excellence in their creations while contributing to a sustainable future.
                        </p>
                    </div>
                    <br>
                    <div style="height: 25%;">
                        <img src="{{ asset('images/img-5.png') }}" class="d-block align-middle img-fluid mx-auto" alt="...">
                    </div>
                    <br>
                    <div style="height: 25%;">
                        <h4 class="text-white">Brand Distinction</h4>
                        <p class="text-white">Bonfire stands out as a reliable supplier with unwavering commitment to consistent, excellent quality. Its charcoal briquets are not
                            just products; they are a testament to Bonfire's dedication to delivering superior grilling experiences every time.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <img src="{{ asset('images/obj-timeline.png') }}" class="d-block align-middle img-fluid mx-auto" alt="...">
                </div>
                <div class="col-lg-4">
                    <div style="height: 25%;">
                        <h4 class="text-white">Brand Story</h4>

                        <p class="text-white">The journey of Bonfire Charcoal Briquets began in 1991 when our founder embarked on a mission to create the perfect charcoal briquet.
                            Armed with nothing but second-hand briquetting machine and sheer determination, the founder ventured into the world of grilling fuels.
                            It was a journey marked by trials and errors, where every challenge was a stepping stone towards perfection. Through unwavering perseverenace
                            and a passion for excellence, the founder transformed charcoal waste into the high-quality briquets that Bonfire is renowned for today.
                        </p>
                    </div>
                    <br>
                    <div style="height: 25%;">
                        <img src="{{ asset('images/img-4.png') }}" class="d-block align-middle img-fluid mx-auto" alt="...">
                    </div>
                    <br>
                    <div style="height: 25%;">
                        <h4 class="text-white">Brand Personality</h4>
                        <p class="text-white">Bonfire is warm, inviting, and fun-loving. It values the essence of togetherness and celebrates the joy of friends and family gathering
                            around the grill. The brand exudes reliability and consistenct, establishing a deep sense of trust among its customers.
                        </p>
                    </div>
                    
                    <div style="height: 25%;">
                        <img src="{{ asset('images/img-6.png') }}" class="d-block align-middle img-fluid mx-auto" alt="...">
                    </div>
                </div>
            </div>
        </div>
        <!-- SMALL -->
        <div class="d-xl-none d-md-block d-block d-sm-block" data-aos="fade-down" data-aos-duration="1500">
            <div class="container mt-5">
                <div class="d-flex justify-content-center">
                    <div>
                        <div class="row mb-3">
                            <div class="col-2 text-center">
                                <div class="border-timeline bg-blue">
                                    <img src="{{ asset('images/icon-clock.png') }}" class="h-auto w-75" alt="">
                                </div>
                            </div>
                            <div class="col-9">
                                <h1 class="text-white">Strategic Direction</h1>

                                <p class="text-white">
                                    Bonfire's strategic direction is clear; to provide buisnesses and individuals with an environmentally friendly barbecue fuel
                                    chocie that aligns with their culinary aspirations and business goals. By offering a consistent supply of premium charcoal briquets, Bonfire
                                    empowers grilling enthusiasts and culinary businesses to achieve unparalleled excellence in their creations while contributing to a sustainable future.
                                </p>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-2 text-center">
                                <div class="border-timeline bg-darkblue p-2">
                                    <img src="{{ asset('images/icon-clock.png') }}" class="h-auto w-75" alt="">
                                </div>
                            </div>
                            <div class="col-9">
                                <h1 class="text-white">Brand Distinction</h1>

                                <p class="text-white">
                                    Bonfire stands out as a reliable supplier with unwavering commitment to consistent, excellent quality. Its charcoal briquets are not
                                    just products; they are a testament to Bonfire's dedication to delivering superior grilling experiences every time.
                                </p>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-2 text-center">
                                <div class="border-timeline bg-blue p-2">
                                    <img src="{{ asset('images/icon-clock.png') }}" class="h-auto w-75" alt="">
                                </div>
                            </div>
                            <div class="col-9">
                                <h1 class="text-white">Brand Story</h1>

                                <p class="text-white">
                                    The journey of Bonfire Charcoal Briquets began in 1991 when our founder embarked on a mission to create the perfect charcoal briquet.
                                    Armed with nothing but second-hand briquetting machine and sheer determination, the founder ventured into the world of grilling fuels.
                                    It was a journey marked by trials and errors, where every challenge was a stepping stone towards perfection. Through unwavering perseverenace
                                    and a passion for excellence, the founder transformed charcoal waste into the high-quality briquets that Bonfire is renowned for today.
                                </p>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-2 text-center">
                                <div class="border-timeline bg-darkblue p-2">
                                    <img src="{{ asset('images/icon-clock.png') }}" class="h-auto w-75" alt="">
                                </div>
                            </div>
                            <div class="col-9">
                                <h1 class="text-white">Brand Personality</h1>

                                <p class="text-white">
                                    Bonfire is warm, inviting, and fun-loving. It values the essence of togetherness and celebrates the joy of friends and family gathering
                                    around the grill. The brand exudes reliability and consistenct, establishing a deep sense of trust among its customers.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<style>
    .banner {
        background-image: url("{{ asset('images/banner.jpg') }}");
        height: 60vh;
        background-position: center;
        background-size: cover;

        display: flex;
        justify-content: center;
        align-items: center;
    }

    .about-timeline {
        background-image: url("{{ asset('images/bg-body-1.jpg') }}");
        height: auto;
        background-position: center;
        background-size: cover;

        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>

<div class="">
    <div class="row justify-content-center text-center py-5">
        <h4 class="mb-0 fw-bold">PARTNERS AND ACCREDITATIONS</h4>
    </div>
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

<div class="bg-about2">
    <div class="container">
        <div class="row justify-content-center text-center py-5">
            <h4 class="mb-0 fw-bold yellow" style="font-size: 50px;">"Transforming local products to global standards."</h4>
        </div>
    </div>
</div>

<div>
    <iframe class="w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15839.62784331234!2d125.49527319999999!3d7.02022195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32f90c39869b09f9%3A0x1e9d999d51e7ea2f!2sCrossing%20Bayabas%2C%20Toril%2C%20Davao%20City%2C%20Davao%20del%20Sur!5e0!3m2!1sen!2sph!4v1703226259526!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

<style>
    .bg-about2 {
        background-image: url("{{ asset('images/bg-body-2.jpg') }}");
        height: 35vh;
        background-position: center;
        background-size: cover;

        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>
@endsection