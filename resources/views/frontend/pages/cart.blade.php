@extends('frontend.layouts.app')

@section('title')

@endsection

@section('seo')
<title>Cart | Bonfire Charcoal: Ignite Culinary Excellence with Premium Briquets for Grilling Perfection</title>
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
            <h1 class="text-white" style="font-size: 75px;">MY CART</h1>
        </div>
        <div class="col-lg-12">
            <div class="d-flex align-items-center justify-content-center">
                <h3 class="text-white mb-0">Home</h3>
                <img src="{{ asset('images/icon-header-1.png') }}" class="d-block align-middle img-fluid" alt="...">
                <h3 class="yellow mb-0">My Cart</h3>
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
    <div class="row">
        <h4 class="fw-bold py-2">MY CART</h4>
    </div>

    <div class="row py-2" style="border-bottom: 2px solid #f6b024;">
        <div class="col-lg-3">
            <h6>Item</h6>
        </div>
        <div class="col-lg-3">
            <h6>Description</h6>
        </div>
        <div class="col-lg-3">
            <h6>Quantity</h6>
        </div>
        <div class="col-lg-3">
            <h6>Price</h6>
        </div>
    </div>
    <!-- <div class="row py-2" style="border-bottom: 2px solid #f6b024;">
        <div class="col-lg-3">
            <div class="d-flex align-items-center h-100">
                <img src="{{ asset('images/img-product-1.jpg') }}" class="d-block align-middle img-fluid" style="width: 150px; height: 140px;" alt="...">
    <h5 class="fw-bold">Charcoal Briquets</h5>
    </div>
    </div>
    <div class="col-lg-3">
        <div class="d-flex align-items-center h-100 justify-content-lg-start justify-content-center">
            <h5 class="fw-bold">Charcoal Briquets in PP Sack</h5>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="d-flex align-items-center h-100 justify-content-lg-start justify-content-center">
            <div class="d-flex">
                <button class="btn rounded fw-bold shadow" type="button" id="decrementQuantity" style="color: #065fad;">-</button>
                <input type="text" class="form-control text-center border-0 fw-bold" value="1" id="quantityProduct" readonly>
                <button class="btn rounded fw-bold shadow" type="button" id="incrementQuantity" style="color: #065fad;">+</button>
            </div>
            <a href="" class="mx-2" style="color: #054780;">Remove</a>
        </div>
    </div>
        <div class="col-lg-3">
            <div class="d-flex align-items-center h-100 justify-content-lg-start justify-content-center">
                <h5 class="fw-bold price">P680.00</h5>
            </div>
        </div>
    </div> -->
    @foreach($decodedCarts as $cart)

    <div class="row py-2" style="border-bottom: 2px solid #f6b024;">
        <div class="col-lg-3">
            <div class="d-flex align-items-center h-100">
                <img src="{{ asset('images/img-product-2.jpg') }}" class="d-block align-middle img-fluid" style="width: 150px; height: 140px;" alt="...">
                <h5 class="fw-bold">{{$cart->prodName}}</h5>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="d-flex align-items-center h-100 justify-content-lg-start justify-content-center">
                <h5 class="fw-bold">{!!$cart->description!!}</h5>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="d-flex align-items-center h-100 justify-content-lg-start justify-content-center">
                <div class="d-flex">
                    <button class="btn rounded fw-bold shadow" type="button" id="decrementQuantity" style="color: #065fad;">-</button>
                    <input type="text" class="form-control text-center border-0 fw-bold" value="{{empty($cart->qty) ? 1 : $cart->qty }}" id="quantityProduct" readonly>
                    <button class="btn rounded fw-bold shadow" type="button" id="incrementQuantity" style="color: #065fad;">+</button>
                </div>
                <a href="" class="mx-2" style="color: #054780;">Remove</a>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="d-flex align-items-center h-100 justify-content-lg-start justify-content-center">
                <h5 class="fw-bold price">P680.00</h5>
            </div>
        </div>
    </div>
    @endforeach

    <style>
        #quantityProduct {
            width: 90px;
            text-align: center;
        }

        #incrementQuantity,
        #decrementQuantity {
            width: 30px;
            height: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 100;
        }
    </style>


    <style>
        .quantityProduct {
            width: 90px;
            text-align: center;
        }

        .incrementQuantity,
        .decrementQuantity {
            width: 30px;
            height: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 100;
        }
    </style>

</div>

<div class="container mb-5">
    <div class="row">
        <div class="col-lg-4">
            <div class="input-group">
                <input type="text" class="form-control rounded-end-0" name="subject" id="subject" placeholder="APPLY VOUCHER CODE" value="" required="" style="border:1px solid #065fad;">
                <button type="submit" class="btn btn-primary py-3 px-4 d-flex align-items-center">
                    <i class="fa-solid fa-arrow-right-long fs-5"></i>
                </button>
            </div>
        </div>
    </div>

    <div class="row justify-content-end">
        <div class="col-lg-4">
            <h4>Total Summary</h4>

            <div class="row justify-content-between">
                <div class="col-md-6">
                    <h5 class="text-secondary">Subtotal:</h5>
                </div>
                <div class="col-md-6 text-end">
                    <h5>P740</h5>
                </div>
            </div>

            <div class="row justify-content-between">
                <div class="col-md-6">
                    <h5 class="text-secondary">Total:</h5>
                </div>
                <div class="col-md-6 text-end">
                    <h4>P740</h5>
                    </h4>
                </div>
            </div>
            <br>
            <div class="row justify-content-end">
                <a href="{{ url('payment') }}" class="btn btn-primary-3 fs-4 px-4 w-auto d-flex align-items-center">
                    <span class="span-text">PROCEED TO PAYMENT</span>
                </a>
            </div>
        </div>
    </div>
</div>
<style>
    ::placeholder {
        font-family: 'Bebas Neue', sans-serif;
        color: #054780 !important;
        font-size: larger;
    }
</style>
@endsection

@section('js')
<!-- <script>
    $(document).ready(function() {
        var quantityInput2 = $('#quantityProduct');

        $('#incrementQuantity').on('click', function() {
            var currentVal2 = parseInt(quantityInput2.val(), 10);
            quantityInput2.val(currentVal2 + 1);
        });

        $('#decrementQuantity').on('click', function() {
            var currentVal2 = parseInt(quantityInput2.val(), 10);
            if (currentVal2 > 1) {
                quantityInput2.val(currentVal2 - 1);
            }
        });
    });
    </script> -->

<script>
    $(document).ready(function() {
        $('.row').each(function() {
            var row = $(this);
            var quantityInput = row.find('.quantityProduct');
            var priceElement = row.find('.price');
            var unitPrice = parseFloat(priceElement.text().replace('P', '')); // Extract unit price from the displayed price

            row.find('.incrementQuantity').on('click', function() {
                var currentVal = parseInt(quantityInput.val(), 10);
                quantityInput.val(currentVal + 1);
                updateTotalPrice(row, quantityInput, priceElement, unitPrice);
            });

            row.find('.decrementQuantity').on('click', function() {
                var currentVal = parseInt(quantityInput.val(), 10);
                if (currentVal > 1) {
                    quantityInput.val(currentVal - 1);
                    updateTotalPrice(row, quantityInput, priceElement, unitPrice);
                }
            });

            row.find('.quantityProduct').on('input', function() {
                updateTotalPrice(row, quantityInput, priceElement, unitPrice);
            });
        });

        function updateTotalPrice(row, quantityInput, priceElement, unitPrice) {
            var currentVal = parseInt(quantityInput.val(), 10);
            // Update total price based on quantity and individual unit price
            var totalPrice = currentVal * unitPrice;
            priceElement.text('P' + totalPrice.toFixed(2));
        }
    });
</script>

@endsection