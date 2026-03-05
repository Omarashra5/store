@extends('layouts.app')

@section('content')

<style>
.product-image{
    border-radius:20px;
    transition:.4s;
}
.product-image:hover{
    transform:scale(1.03);
}

.price{
    font-size:32px;
    font-weight:700;
}

.btn-cart{
    border-radius:50px;
    font-size:18px;
    transition:.3s;
}

.btn-cart:hover{
    transform:translateY(-3px);
    box-shadow:0 10px 25px rgba(0,0,0,.2);
}

.feature-box{
    background:#f8f9fa;
    border-radius:15px;
    padding:15px;
    text-align:center;
}
</style>

<div class="container py-5">

    <div class="row align-items-center g-5">
        <div class="col-lg-6">
            <img
                src="{{ asset($product->image) }}"
                class="img-fluid shadow-lg product-image"
                alt="{{ $product->name }}">
        </div>
        <div class="col-lg-6">
            <h1 class="fw-bold mb-3">
                {{ $product->name }}
            </h1>

            <p class="text-secondary fs-5">
                {{ $product->description }}
            </p>
            <div class="price text-primary mb-4">
                ${{ number_format($product->price,2) }}
            </div>
           <form action="{{ route('cart.add', $product->id) }}" method="POST">
    @csrf
    <button class="btn btn-success">
        Add To Cart
    </button>
</form>
            <div class="row mt-5 g-3">
                <div class="col-4">
                    <div class="feature-box shadow-sm">
                        <br>
                        Free Shipping
                    </div>
                </div>

                <div class="col-4">
                    <div class="feature-box shadow-sm">
                        <br>
                        Secure Payment
                    </div>
                </div>

                <div class="col-4">
                    <div class="feature-box shadow-sm">
                        <br>
                        Premium Quality
                    </div>
                </div>

            </div>

        </div>
    </div>

</div>

@endsection