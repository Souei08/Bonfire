@extends('frontend.layouts.app')

@section('title')

@endsection

@section('seo')
<title>News and Promotions | Bonfire Charcoal: Ignite Culinary Excellence with Premium Briquets for Grilling Perfection</title>
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
            <h1 class="text-white" style="font-size: 75px;">NEWS AND PROMOTIONS</h1>
        </div>
        <div class="col-lg-12">
            <div class="d-flex align-items-center justify-content-center">
                <h3 class="text-white mb-0">Home</h3>
                <img src="{{ asset('images/icon-header-1.png') }}" class="d-block align-middle img-fluid" alt="...">
                <h3 class="yellow mb-0">News and Promotions</h3>
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

<section class="container promos">
    <div class="w-100 bg-white shadow-lg pt-4 pb-4 px-4">
        <div class="text-center">
            <h4 class="fw-bold">LATEST PROMOS</h4>
            <br>
        </div>
        <div class="owl-carousel owl-theme owl-loaded owl-drag">
            <div class="owl-stage-outer">
                <div class="owl-stage">
                    @foreach($promo as $promos)
                        <div class="owl-item">
                            <a href="{{ url('promotions-article') }}" style="color: inherit">
                                <div class="bg-dark position-relative">
                                    <img src="{{ asset('uploads/promo/' .$promos->thumbnail) }}" class="w-100" alt="" style="height: 300px;">
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .promos {
        transform: translate(0px, -80px);
    }

    .title {
        text-shadow: 2px 2px 4px gray;
    }
</style>

<div class="container">
    <div class="row justify-content-center">
        @foreach($firstpin as $pinned)
        <div class="col-lg-8 p-2">
            <a href="{{ url('news-article') }}" style="color: inherit">
                <div class="position-relative">
                    <img src="{{ asset('uploads/blog/' .$pinned->thumbnail) }}" class="d-block align-middle img-fluid w-100 rounded-3 shadow" alt="...">
                    <div class="d-flex flex-column justify-content-end position-absolute top-0 w-100 h-100 p-3 p-md-5 p-lg-3 p-xl-5" style="background-image: linear-gradient(to bottom, rgba(255,0,0,0), rgba(255,255,255,0.2), rgba(255,255,255,1));">
                        <h4 class="fw-bold">{{$pinned->title}}</h4>
                        <p>{!!$pinned->description!!}</p>
                        <h6><b>{{$pinned->author}} |</b>{{ $pinned->created_at->format('M d, Y') }}</h6>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
       
        <div class="col-lg-4 p-2 d-flex flex-wrap justify-content-between gap-3">
            @foreach($latest as $latests)
            <div class="position-relative w-100">
                <a href="{{ url('news-article') }}" style="color: inherit">
                    <img src="{{ asset('uploads/blog/' .$latests->thumbnail) }}" class="d-block align-middle img-fluid w-100 rounded-3 shadow h-100" alt="...">
                    <div class="d-flex flex-column justify-content-end position-absolute top-0 w-100 h-100 p-3 p-md-5 p-lg-3 p-xl-3" style="background-image: linear-gradient(to bottom, rgba(255,0,0,0), rgba(255,255,255,0.2), rgba(255,255,255,1));">
                        <h5 class="fw-bold" id="title">{{$latests->title}}</h5>
                        <h6><b>{{$latests->author}} |</b> {{ $latests->created_at->format('M d, Y') }}</h6>
                    </div>
                </a>
            </div>
            @endforeach
           
            {{-- <div class="position-relative w-100">
                <a href="{{ url('news-article') }}" style="color: inherit">
                    <img src="{{ asset('images/img-news-ng-3.png') }}" class="d-block align-middle img-fluid w-100 rounded-3 shadow h-100" alt="...">
                    <div class="d-flex flex-column justify-content-end position-absolute top-0 w-100 h-100 p-3 p-md-5 p-lg-3 p-xl-3" style="background-image: linear-gradient(to bottom, rgba(255,0,0,0), rgba(255,255,255,0.2), rgba(255,255,255,1));">
                        <h5 class="fw-bold" id="title">Set blandit libero volutpat sed cras ornare arcu sit amet luctus</h5>
                        <h6><b>Jan Cruz |</b> Oct 17, 2023</h6>
                    </div>
                </a>
            </div> --}}

        </div>
        

    </div>
</div>
<br>
<div class="container">
    <div class="row justify-content-center gy-4">
        @foreach($blog as $blogs)
        <div class="col-lg-4">
            <a href="{{ url('news-article') }}" style="color: inherit">
                <div class="position-relative" style="width: 40vh">
                    <img src="{{ asset('uploads/blog/' .$blogs->thumbnail) }}" class="d-block align-middle img-fluid w-100 rounded-3 shadow h-100" alt="...">
                    <div class="d-flex flex-column justify-content-end position-absolute top-0 w-100 h-100 p-3 p-md-5 p-lg-3 p-xl-3" style="background-image: linear-gradient(to bottom, rgba(255,0,0,0), rgba(255,255,255,0.2), rgba(255,255,255,1));">
                        <h5 class="fw-bold" id="title">{{$blogs->title}}</h5>
                        <h6><b>{{$blogs->author}} |</b> {{ $blogs->created_at->format('M d, Y') }}</h6>
                    </div>
                </div>
            </a>
        </div>
        @endforeach

        
    </div>
</div>
<br>
<br><br><br>
@endsection

@section('js')
<script>
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 30,
        responsiveClass: true,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1,
                nav: false
            },
            991: {
                items: 2,
                nav: false
            }
        }
    })
</script>
@endsection