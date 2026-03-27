@extends('layouts.app')
@section('content')
<div class="hero-section position-relative overflow-hidden text-center">
        <div class="floating-images position-absolute top-0 start-0 w-100 h-100 d-flex justify-content-around align-items-center">
        <img src="{{ asset('images/Smartwatch Pro.webp') }}" class="floating-img layer1" alt="Smartwatch">
        <img src="{{ asset('images/Gaming Laptop.webp') }}" class="floating-img layer2" alt="Laptop">
        <img src="{{ asset('images/drone.png') }}" class="floating-img layer3" alt="Drone">
    </div>
    <div class="hero-text position-absolute top-50 start-50 translate-middle text-white px-4">
        <h1 class="fw-bold hero-title">Welcome to TechStore</h1>
        <p class="hero-subtitle">Upgrade your tech lifestyle with the latest gadgets, electronics, and accessories.</p>
        <a href="{{ route('products.index') }}" class="btn btn-hero btn-lg fw-bold">Shop Now</a>
    </div>
</div>
<div class="container my-5">
    <h2 class="mb-5 fw-bold text-center">Featured Products</h2>
    <div class="row g-4">
        @foreach($featuredProducts as $product)
        <div class="col-md-3">
            <div class="card product-card h-100 border-0 shadow-lg">
                <img src="{{ asset($product->image) }}" class="card-img-top" alt="{{ $product->name }}">
                <div class="card-body text-center">
                    <h5 class="card-title fw-bold">{{ $product->name }}</h5>
                    <p class="card-text text-primary fw-semibold">${{ number_format($product->price,2) }}</p>
                    <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary w-100 btn-product">View</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<style>
.hero-section {
    height: 650px;
    border-radius: 25px;
    background: linear-gradient(135deg, #0f0c29, #302b63, #24243e);
    overflow: hidden;
}

.floating-images img {
    height: 300px;
    opacity: 0.20;
    transition: transform 0.3s;
}
.hero-text {
    z-index: 10;
    max-width: 700px;
}
.hero-title {
    font-size: 3.5rem;
    text-shadow: 4px 4px 20px rgba(0,0,0,0.7);
}
.hero-subtitle {
    font-size: 1.3rem;
    text-shadow: 3px 3px 15px rgba(0,0,0,0.5);
    margin-bottom: 25px;
}
.btn-hero {
    background: linear-gradient(135deg, #ff4b2b, #ff416c);
    border: none;
    border-radius: 50px;
    padding: 18px 60px;
    font-size: 1.2rem;
    box-shadow: 0 10px 20px rgba(0,0,0,0.3), 0 0 25px rgba(255,75,43,0.5);
    transition: transform 0.3s, box-shadow 0.3s, filter 0.3s;
}
.btn-hero:hover {
    transform: scale(1.15);
    box-shadow: 0 15px 30px rgba(0,0,0,0.4), 0 0 40px rgba(255,75,43,0.7);
    filter: brightness(1.1);
}
.product-card {
    border-radius: 20px;
}
.product-card img {
    border-radius: 20px 20px 0 0;
    height: 240px;
    object-fit: cover;
}
</style>
@endsection