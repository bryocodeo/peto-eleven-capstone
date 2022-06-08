@extends('layouts.main')

@section('content')


    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-start">
                <div class="col-lg-8 text-center text-lg-start">
                    <h1 class="display-2 text-dark mb-lg-4">Pet Goodie Shop</h1>
                    <h1 class="text-dark mb-lg-4">Make Your Pets Happy</h1>
                    <p class="fs-4 text-dark mb-lg-4">Your one-stop-shop for your pets full-tummy! </p>
                    <div class="d-flex align-items-center justify-content-center justify-content-lg-start pt-5">
                        <a href="{{ route('about') }}" class="btn btn-outline-light border-2 py-md-3 px-md-5 me-5">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <!-- Products Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
                <h6 class="text-primary text-uppercase">Products</h6>
                <h1 class="display-5 text-uppercase mb-0">Products For Your Best Friends</h1>
            </div>
            <div class="owl-carousel product-carousel">

                @foreach($products as $product)

                <div class="pb-5">
                    <div class="product-item position-relative bg-light d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="{{ asset('images/'.$product->image) }}" alt="">
                        <h6 class="text-uppercase">{{ $product->name }}</h6>

                        @if($product->sale_price != null)
                            <h5 class="text-primary mb-0">₱{{ $product->sale_price }}</h5>
                            <h5 class="text-primary mb-0" style = "text-decoration: line-through;">₱{{ $product->price }}</h5>
                        @else
                            <h5 class="text-primary mb-0">₱{{ $product->price }}</h5>
                        @endif

                        <div class="btn-action d-flex justify-content-center">

                            <form method="POST" action="{{ route('add_to_cart') }}">
                                @csrf
                                <input type="hidden" name="id" value="{{ $product->id }}">
                                <input type="hidden" name="name" value="{{ $product->name }}">
                                <input type="hidden" name="price" value="{{ $product->price }}">
                                <input type="hidden" name="sale_price" value="{{ $product->sale_price }}">
                                <input type="hidden" name="image" value="{{ $product->image }}">
                                <input type="hidden" name="quantity" value="1">

                                <button class="btn btn-primary py-2 px-3" type="submit"><i class="bi bi-cart"></i></button>

                            </form>

                            <a class="btn btn-primary py-2 px-3" href="{{ route('singleproduct',['id'=>$product->id]) }}"><i class="bi bi-eye"></i></a>
                        </div>
                    </div>
                </div>

                @endforeach

            </div>
        </div>
    </div>
    <!-- Products End -->


    <!-- Offer Start -->
    <div class="container-fluid bg-offer my-5 py-5">
        <div class="container py-5">
            <div class="row gx-5 justify-content-start">
                <div class="col-lg-7">
                    <div class="border-start border-5 border-dark ps-5 mb-5">
                        <h6 class="text-dark text-uppercase">Special Offer</h6>
                        <h1 class="display-6 text-uppercase text-dark mb-0">Save 30% on all goodies for your pets!</h1>
                    </div>
                    <p class="text-dark mb-4">Don't miss out on our special offer of the season! Get sweet savings for your <br>pet best friends of up to 30% on our best-selling pet goodies! <br>Check out all our special deals, before time runs out! Hurry! We're on sale!</p>
                    <a href="{{ route('products') }}" class="btn btn-light py-md-3 px-md-5 me-3">Shop Now</a>
                    <a href="{{ route('about') }}" class="btn btn-outline-light py-md-3 px-md-5">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Offer End -->

@endsection