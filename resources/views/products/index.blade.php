@extends('layouts.app')

@section('content')

<style>
.page-title{
    font-weight:800;
    letter-spacing:1px;
}
.product-card{
    border:none;
    border-radius:18px;
    overflow:hidden;
    transition:all .35s ease;
    background:#fff;
}

.product-card:hover{
    transform:translateY(-8px);
    box-shadow:0 20px 45px rgba(0,0,0,.15);
}
.product-img-wrapper{
    height:220px;
    overflow:hidden;
    background:#f8f9fa;
}

.product-img{
    width:100%;
    height:100%;
    object-fit:cover;
    transition:.4s;
}

.product-card:hover .product-img{
    transform:scale(1.08);
}
.price-badge{
    position:absolute;
    top:12px;
    right:12px;
    background:#0d6efd;
    color:#fff;
    padding:6px 12px;
    border-radius:30px;
    font-weight:600;
    font-size:14px;
}
.btn-fancy{
    transition:.3s;
    font-weight:600;
}

.btn-fancy:hover{
    transform:translateY(-2px);
    box-shadow:0 8px 18px rgba(13,110,253,.3);
}

.products-section{
    background:linear-gradient(180deg,#f8fafc,#ffffff);
}
</style>
<div class="products-section py-5">
<div class="container">
    <div class="text-center mb-5">
        <h1 class="page-title">Our Products</h1>
        <p class="text-muted">Discover premium tech products crafted for performance</p>
    </div>
    <div class="row g-4">

        @foreach($products as $product)

        <div class="col-lg-3 col-md-6">
            <div class="card product-card h-100 position-relative">
                <span class="price-badge">
                    ${{ number_format($product->price,2) }}
                </span>
                <div class="product-img-wrapper">
                    <img
                        src="{{ asset($product->image) }}"
                        class="product-img"
                        alt="{{ $product->name }}">
                </div>
                <div class="card-body d-flex flex-column text-center">

                    <h5 class="fw-bold mb-3">
                        {{ $product->name }}
                    </h5>
                    <div class="mt-auto">
                        <a href="{{ route('products.show',$product->id) }}"
                           class="btn btn-outline-primary w-100 mb-2 btn-fancy">
                            View Details
                        </a>
                        <form method="POST" action="{{ route('cart.add',$product->id) }}">
                            @csrf
                            <button class="btn btn-primary w-100 btn-fancy">
                                Add To Cart
                            </button>
                        </form>

                    </div>

                </div>

            </div>

        </div>

        @endforeach

    </div>

</div>
</div>

@endsection