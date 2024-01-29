@extends('frontend.layouts.app')

@section('title')

@endsection

@section('seo')
<title>Shop | Bonfire Charcoal: Ignite Culinary Excellence with Premium Briquets for Grilling Perfection</title>
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
            <h1 class="text-white" style="font-size: 75px;">SHOP</h1>
        </div>
        <div class="col-lg-12">
            <div class="d-flex align-items-center justify-content-center">
                <h3 class="text-white mb-0">Home</h3>
                <img src="{{ asset('images/icon-header-1.png') }}" class="d-block align-middle img-fluid" alt="...">
                <h3 class="yellow mb-0">Shop</h3>
            </div>
        </div>
    </div>
</div>

<style>
    .banner {
        background-image: url("{{ asset('images/banner-shop.jpg') }}");
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
        <!-- Tabs -->
        <div class="col-md-12">
            <div class="nav flex-row nav-pills justify-content-center align-items-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-hex" role="tab" aria-controls="v-pills-home" aria-selected="true">HEXAGONAL BRIQUETS</a>
                <div class="fw-bold mx-3 d-lg-block d-none">|</div>
                <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-shisha" role="tab" aria-controls="v-pills-messages" aria-selected="false">SHISHA BRIQUETS</a>
                <div class="fw-bold mx-3 d-lg-block d-none">|</div>
                <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-pillow" role="tab" aria-controls="v-pills-messages" aria-selected="false">PILLOW BRIQUETS</a>
            </div>
        </div>

        <!-- Tab Content -->
        <div class="col-md-12">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-hex" role="tabpanel" aria-labelledby="v-pills-home-tab">

                    <!-- Product -->
                    @foreach($items as $item)
                        <div class="row my-5">
                            <div class="col-lg-5">
                                <div class="d-flex align-items-center justify-content-center h-100">
                                    <img src="{{asset('uploads/products/' .$item->thumbnail)}}" class="d-block align-middle img-fluid" alt="...">
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="row">
                                    <div class="col-md-3">
                                        <h5 class="text-center">{{$item->prodName}}</h5>
                                    </div>
                                    <div class="col-md-7">
                                        <h5 class="text-secondary text-center">-----------------------------------------------</h5>
                                    </div>
                                    <div class="col-md-2">
                                        <h5 class="text-center">P{{$item->price}}</h5>
                                    </div>
                                </div>


                                <div class="row px-3 px-lg-4  py-4">
                                    <div class="col-md-6">
                                        <h6 class="text-secondary">Product Name</h6>
                                        <h6>{{$item->prodName}}</h6>
                                        <br>
                                        <h6 class="text-secondary">Description</h6>
                                        <h6>{!!$item->description!!}</h6>
                                        <br>
                                        <h6 class="text-secondary">Varation</h6>
                                        <h6>{{$item->varation}}</h6>
                                        <br>
                                        <h6 class="text-secondary">Weight</h6>
                                        <h6>{{$item->weight}}</h6>
                                        <br>
                                        <h6 class="text-secondary">Size/Dimension</h6>
                                        <h6>{{$item->length}} mm x {{$item->width}} mm x {{$item->height}} mm</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row align-items-end justify-content-center justify-content-lg-end pt-3" style="height: 100%;">
                                            

                                            <button 
                                                data-items="{{$item}}"
                                                class="addToCartButton btn btn-primary-3 fs-4 px-4 w-auto d-flex align-items-center" 
                                                style="height: auto;"
                                            >
                                                <span class="span-text">+ ADD TO CART</span>
                                            </button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    

                </div>
                <div class="tab-pane fade" id="v-pills-shisha" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    @foreach($items2 as $item)
                        <div class="row my-5">
                            <div class="col-lg-5">
                                <div class="d-flex align-items-center justify-content-center h-100">
                                    <img src="{{asset('uploads/products/' .$item->thumbnail)}}" class="d-block align-middle img-fluid" alt="...">
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="row">
                                    <div class="col-md-3">
                                        <h5 class="text-center">{{$item->prodName}}</h5>
                                    </div>
                                    <div class="col-md-7">
                                        <h5 class="text-secondary text-center">-----------------------------------------------</h5>
                                    </div>
                                    <div class="col-md-2">
                                        <h5 class="text-center">P{{$item->price}}</h5>
                                    </div>
                                </div>


                                <div class="row px-3 px-lg-4  py-4">
                                    <div class="col-md-6">
                                        <h6 class="text-secondary">Product Name</h6>
                                        <h6>{{$item->prodName}}</h6>
                                        <br>
                                        <h6 class="text-secondary">Description</h6>
                                        <h6>{!!$item->description!!}</h6>
                                        <br>
                                        <h6 class="text-secondary">Varation</h6>
                                        <h6>{{$item->varation}}</h6>
                                        <br>
                                        <h6 class="text-secondary">Weight</h6>
                                        <h6>{{$item->weight}}</h6>
                                        <br>
                                        <h6 class="text-secondary">Size/Dimension</h6>
                                        <h6>{{$item->length}} mm x {{$item->width}} mm x {{$item->height}} mm</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row align-items-end justify-content-center justify-content-lg-end pt-3" style="height: 100%;">
                                            

                                            <button 
                                                data-items="{{$item}}"
                                                class="addToCartButton btn btn-primary-3 fs-4 px-4 w-auto d-flex align-items-center" 
                                                style="height: auto;"
                                            >
                                                <span class="span-text">+ ADD TO CART</span>
                                            </button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    
                </div>
                <div class="tab-pane fade" id="v-pills-pillow" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                    @foreach($items3 as $item)
                    <div class="row my-5">
                        <div class="col-lg-5">
                            <div class="d-flex align-items-center justify-content-center h-100">
                                <img src="{{asset('uploads/products/' .$item->thumbnail)}}" class="d-block align-middle img-fluid" alt="...">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="row">
                                <div class="col-md-3">
                                    <h5 class="text-center">{{$item->prodName}}</h5>
                                </div>
                                <div class="col-md-7">
                                    <h5 class="text-secondary text-center">-----------------------------------------------</h5>
                                </div>
                                <div class="col-md-2">
                                    <h5 class="text-center">P{{$item->price}}</h5>
                                </div>
                            </div>


                            <div class="row px-3 px-lg-4  py-4">
                                <div class="col-md-6">
                                    <h6 class="text-secondary">Product Name</h6>
                                    <h6>{{$item->prodName}}</h6>
                                    <br>
                                    <h6 class="text-secondary">Description</h6>
                                    <h6>{!!$item->description!!}</h6>
                                    <br>
                                    <h6 class="text-secondary">Varation</h6>
                                    <h6>{{$item->varation}}</h6>
                                    <br>
                                    <h6 class="text-secondary">Weight</h6>
                                    <h6>{{$item->weight}}</h6>
                                    <br>
                                    <h6 class="text-secondary">Size/Dimension</h6>
                                    <h6>{{$item->length}} mm x {{$item->width}} mm x {{$item->height}} mm</h6>
                                </div>
                                <div class="col-md-6">
                                    <div class="row align-items-end justify-content-center justify-content-lg-end pt-3" style="height: 100%;">
                                        

                                        <button 
                                            data-items="{{$item}}"
                                            class="addToCartButton btn btn-primary-3 fs-4 px-4 w-auto d-flex align-items-center" 
                                            style="height: auto;"
                                        >
                                            <span class="span-text">+ ADD TO CART</span>
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                
                </div>
            </div>
        </div>

    </div>
</div>

<style>
    
</style>

<div class="bg-body-secondary py-2">
    <div class="container">
        <h4 class="mb-0 py-1">PRODUCT PROMOS</h4>

        <div class="owl-carousel owl-theme owl-loaded owl-drag">
            <div class="owl-stage-outer">
                <div class="owl-stage">
                    <div class="owl-item">
                        <a href="{{ url('promotions-article') }}" style="color: inherit">
                            <div class="bg-dark position-relative">
                                <img src="{{ asset('images/img-promo-1.png') }}" class="w-100" alt="" style="height: 300px;">

                            </div>
                        </a>
                    </div>
                    <div class="owl-item">
                        <a href="{{ url('promotions-article') }}" style="color: inherit">
                            <div class="bg-primary position-relative">
                                <img src="{{ asset('images/img-promo-2.png') }}" class="w-100" alt="" style="height: 300px;">

                            </div>
                        </a>
                    </div>
                    <div class="owl-item">
                        <a href="{{ url('promotions-article') }}" style="color: inherit">
                            <div class="bg-primary position-relative">
                                <img src="{{ asset('images/img-promo-2.png') }}" class="w-100" alt="" style="height: 300px;">

                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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
    
    function fetchData(callback) {
    $.ajax({
        type: 'GET',
        url: '{{ route("get.cart") }}',
        success: function(response) {
            callback(null, response.cart);
        },
        error: function(error) {
            console.error('Error retrieving cart');
            callback(error, null);
        }
    });
}   

    $('.addToCartButton').click(function() {
        let newItem = $(this).data('items');
        let newItemId = newItem.id;

        fetchData(function(error, result) {
            if (error) {
                console.error('Error:', error);
            } else {
            let existingArray = JSON.parse(result) || [];

            existingArray.forEach(function(obj) {
                if (obj.id === newItemId) {
                    if (obj.qty) {
                        obj.qty = obj.qty + 1;
                    } else {
                        obj.qty = 2;
                    }
                } 
            });

            var similarProductExists = existingArray.some(function(obj) {
                return obj.id === newItemId;
            });

            let addToCartData = "";

            if (!similarProductExists) {
                const combinedArray = existingArray.concat([newItem]);

                addToCartData = JSON.stringify(combinedArray);
            } else {
                addToCartData = JSON.stringify(existingArray);
            }

            $.ajax({
                type: 'POST',
                url: '{{ route("save.cart") }}',
                data: {
                    _token: '{{ csrf_token() }}',
                    cart: addToCartData
                },
                success: function(response) {
                    console.log('Cart saved successfully');
                },
                error: function(error) {
                    console.error('Error saving cart');
                }
            });

            window.location.href = "{{ url('cart') }}";
            }
        });


    });
    
</script>
@endsection