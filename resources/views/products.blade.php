@extends('layouts.main')

@section('content')

    <!-- Products Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
                <h6 class="text-primary text-uppercase">Products</h6>
                <h1 class="display-5 text-uppercase mb-0">Products For Your Best Friends</h1>
            </div>
            <div class="row">


                @foreach($products as $product)

                 <div class="col-lg-3 col-md-6 col-sm-12 mb-5">
                    <div class="product-item position-relative bg-light d-flex flex-column text-center">
                        <img style="width:200px; height: 200px" class="img-fluid mb-4 mx-auto" src="{{ asset('images/'.$product->image) }}" alt="">
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

@endsection