@extends('frontend.layouts.app')

@section('title')

@endsection

@section('seo')
<title>Payment | Bonfire Charcoal: Ignite Culinary Excellence with Premium Briquets for Grilling Perfection</title>
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
            <h1 class="text-white" style="font-size: 75px;">PAYMENT</h1>
        </div>
        <div class="col-lg-12">
            <div class="d-flex align-items-center justify-content-center">
                <h3 class="text-white mb-0">Home</h3>
                <img src="{{ asset('images/icon-header-1.png') }}" class="d-block align-middle img-fluid" alt="...">
                <h3 class="yellow mb-0">Payment</h3>
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
<br>
<div class="container my-5">
    <div class="row">
        <h4 class="fw-bold py-2">PAYMENT</h4>
    </div>

    <div class="row gy-2">
        <div class="col-lg-7">
            <div class="bg-body-secondary rounded p-3" style="">
                <h5>Personal Details</h5>
                <div style="border:1px solid #f6b024;"></div>
                <br>
                <form action="{{url('/pay')}}" method="POST">@csrf

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group position-relative mb-2">
                            <input type="text" name="firstname" class="form-control rounded-0 pt-3" id="fname" style="border-width: 2px; height: 55px;" value="{{ isset($profile->firstname) ? $profile->firstname : '' }}">
                            @error('firstname')
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                            @enderror
                            <label for="fname" class="text-black placeholder-label">First Name*</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group position-relative mb-2">
                            <input type="text" name="lastname" class="form-control rounded-0 pt-3" id="lname" style="border-width: 2px; height: 55px;" value="{{ isset($profile->lastname) ? $profile->lastname : '' }}">
                            @error('lastname')
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                            @enderror
                            <label for="lname" class="text-black placeholder-label">Last Name*</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group position-relative mb-2">
                            <input type="text" name="address" class="form-control rounded-0 pt-3" id="address" style="border-width: 2px; height: 55px;"  value="{{ isset($profile->address) ? $profile->address : '' }}">
                            @error('address')
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                            @enderror
                            <label for="address" class="text-black placeholder-label">Address</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group position-relative mb-2">
                            <input type="email" name="email" class="form-control rounded-0 pt-3" id="email" style="border-width: 2px; height: 55px;"  value="{{ isset($profile->email) ? $profile->email : '' }}">
                            @error('email')
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                            @enderror
                            <label for="email" class="text-black placeholder-label">Email Address*</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group position-relative mb-2">
                            <input type="number" name="number" class="form-control rounded-0 pt-3" id="number" style="border-width: 2px; height: 55px;"  value="{{ isset($profile->number) ? $profile->number : '' }}">
                            @error('number')
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                            @enderror
                            <label for="number" class="text-black placeholder-label">Phone Number*</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-check ms-3">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Create an account?
                            </label>
                        </div>
                    </div>
                </div>

                <br>
                <br>
                <h5>Shipping Information</h5>
                <div style="border:1px solid #f6b024;"></div>
                <br>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group position-relative mb-2">
                            <input type="text" name="shippingfirstname" class="form-control rounded-0 pt-3" id="shippingFname" style="border-width: 2px; height: 55px;" value="{{ isset($info->firstname) ? $info->firstname : '' }}">
                            @error('shippingfirstname')
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                            @enderror
                            <label for="shippingFname" class="text-black placeholder-label">First Name*</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group position-relative mb-2">
                            <input type="text" name="shippinglastname" class="form-control rounded-0 pt-3" id="shippingLname" style="border-width: 2px; height: 55px;" value="{{ isset($info->lastname) ? $info->lastname : '' }}">
                            @error('shippinglastname')
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                            @enderror
                            <label for="shippingLname" class="text-black placeholder-label">Last Name*</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group position-relative mb-2">
                            <input type="text" name="shippingState" class="form-control rounded-0 pt-3" id="province" style="border-width: 2px; height: 55px;" value="{{ isset($info->state) ? $info->state : '' }}">
                            @error('shippingState')
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                            @enderror
                            <label for="province" class="text-black placeholder-label ps-1">State/Province*</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group position-relative mb-2">
                            <input type="text" name="shippingCity" class="form-control rounded-0 pt-3" id="city" style="border-width: 2px; height: 55px;" value="{{ isset($info->city) ? $info->city : '' }}">
                            @error('shippingCity')
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                            @enderror
                            <label for="city" class="text-black placeholder-label ms-1">City*</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group position-relative mb-2">
                            <input type="text" name="shippingBarangay" class="form-control rounded-0 pt-3" id="barangay" style="border-width: 2px; height: 55px;" value="{{ isset($info->barangay) ? $info->barangay : '' }}">
                            @error('shippingBarangay')
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                            @enderror
                            <label for="barangay" class="text-black placeholder-label">Barangay*</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group position-relative mb-2">
                            <input type="text" name="shippingAddress" class="form-control rounded-0 pt-3" id="address" style="border-width: 2px; height: 55px;" value="{{ isset($info->address) ? $info->address : '' }}">
                            @error('shippingAddress')
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                            @enderror
                            <label for="address" class="text-black placeholder-label ms-0 ps-0">Complete Address*</label>
                            <span class="text-secondary ps-lg-3" style="font-family: 'Roboto', sans-serif; font-size: 12px;">Ex: Block No./Unit No., Street, Residence, Barangay, City/Town, Province</span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group position-relative mb-2">
                            <input type="number" name="shippingNumber" class="form-control rounded-0 pt-3" id="shippingNumber" style="border-width: 2px; height: 55px;" value="{{ isset($info->number) ? $info->number : '' }}">
                            @error('shippingNumber')
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                            @enderror
                            <label for="shippingNumber" class="text-black placeholder-label ms-0 ps-0">Phone Number*</label>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-lg-5">
            <div class="border rounded p-3" style="">
                <h4>Order Summary</h4>
                <div style="border:1px solid #f6b024;"></div>
                <br>
                @foreach($decodedCarts as $cart)
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-sm-4">
                                <span class="span">{{$cart->prodName}}</span>
                            </div>
                            @php
                            $totalPrice = 0;
                            @endphp
                            @php
                                $qty = 0;
                                if(!isset($cart->qty)){
                                    $qty = 1;
                                }
                                else{
                                   $qty = $cart->qty;
                                }
                                $totalPrice += $cart->price * $qty;
                            @endphp
                            <div class="col-sm-4">
                                <span class="span">{{$qty}}X</span>
                            </div>
                            <div class="col-sm-4 text-end">
                                <span class="span">P{{$totalPrice}}</span>

                            </div>
                        </div>

                        <span class="span text-secondary">{!!$cart->description!!}</span>
                    </div>
                </div>
                @endforeach
                <br>
                <div style="border:1px solid #f6b024;"></div>
                <br>
                @php
                $totalPrice = 0;
                @endphp
                @if(is_array($decodedCarts) && count($decodedCarts) > 0)
                @foreach($decodedCarts as $cart)
                @php
                        
                        $qty = 0;
                        if(!isset($cart->qty)){
                            $qty = 1;
                        }
                        else{
                            $qty = $cart->qty;
                        }
                        $totalPrice += $cart->price * $qty;
                    // $totalPrice += $cart->price;
                @endphp
                @endforeach
                @endif
                <div class="row">
                    <div class="col-sm-6">
                        <span class="span fw-bold">Subtotal</span>
                    </div>
                    <div class="col-sm-6 text-end">
                        <span class="span">P{{$totalPrice}}</span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <span class="span fw-bold">Total</span>
                    </div>
                    <div class="col-sm-6 text-end">
                        <span class="span fw-bold fs-5">P{{$totalPrice}}</span>
                        <input type="hidden" value="{{$totalPrice}}" name="totalPrice">
                    </div>
                </div>

                <br>
                <h4>Choose Payment Method</h4>
                <div class="px-3">
                    <!-- <div class="form-check">
                        <input class="form-check-input" type="radio" name="credit" id="credit" value="credit">
                        <label class="form-check-label fw-bold" for="credit">
                            Credit Card / Debit Card
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gcash" id="gcash" value="gcash">
                        <label class="form-check-label fw-bold" for="gcash">
                            GCash
                        </label>
                    </div> -->

                    <div class="form-check">
                        <input class="form-check-input rounded-0 single-checkbox" type="checkbox" value="Card" name="payment_method" id="CardChecked">
                       
                        <label class="form-check-label fw-bold" for="CardChecked">
                            Credit Card / Debit Card
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input rounded-0 single-checkbox" type="checkbox" value="GCash" name="payment_method" id="GCashChecked">
                        <label class="form-check-label fw-bold" for="GCashChecked">
                            GCash
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input rounded-0 single-checkbox" type="checkbox" value="Paymaya" name="payment_method" id="PaymayaChecked">
                        <label class="form-check-label fw-bold" for="PaymayaChecked">
                            Paymaya
                        </label>
                    </div>
                    @error('payment_method')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                    @enderror
                    
                    @foreach ($decodedCarts as $cart)
                       <input type="hidden" value="{{$cart->prodName}}" name="item[]">
                       
                       @if(isset($cart->qty))
                       <input type="hidden" value="{{$cart->qty}}" name="qty[]">
                       @else
                       <input type="hidden" value="1" name="qty[]">
                       @endif
                    @endforeach
                  
                    <div class="form-check my-5">
                        <input class="form-check-input rounded-0" type="checkbox" value="" name="terms" id="terms">
                        <label class="form-check-label text-secondary" for="terms">I have read and agree to the <a href="{{ asset('pdf/privacy_policy.pdf') }}" target="_blank">Privacy Policy</a></label>
                    </div>

                    <div class="row justify-content-center">
                        <button type="submit"  class="btn btn-primary-3 fs-4 px-5 w-auto d-flex align-items-center">
                            <span class="span-text">CHECKOUT</span>
                        </button>
                    </div>
                </div>
            </form>
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

@section('js')
<!-- Checkbox Select One Only Script -->
<script>
    const checkboxes = document.querySelectorAll('.single-checkbox');

    checkboxes.forEach(checkbox => {
        checkbox.addEventListener('click', () => {
            checkboxes.forEach(otherCheckbox => {
                if (otherCheckbox !== checkbox) {
                    otherCheckbox.checked = false;
                }
            });
        });
    });
</script>
@endsection