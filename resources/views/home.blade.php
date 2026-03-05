@extends('layouts.app')

@section('content')
<div class="position-relative overflow-hidden text-center" style="height: 550px; background: linear-gradient(135deg, #060a11, #20093a); border-radius:15px;">
    
    <div class="position-absolute top-50 start-50 translate-middle text-white px-4">
        <h1 class="fw-bold mb-3" style="text-shadow: 2px 2px 12px rgba(0,0,0,0.6);">Welcome to TechStore</h1>
        <p class="fs-4 mb-4" style="text-shadow: 1px 1px 8px rgba(0,0,0,0.5);">
            Discover the latest gadgets & electronics with amazing deals!
        </p>
    </div>
    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex justify-content-around align-items-center opacity-25">
        <img src="{{ asset('images/Smartwatch Pro.webp') }}" class="h-50" alt="Tech Icon">
        <img src="{{ asset('images/Gaming Laptop.webp') }}" class="h-50" alt="Tech Icon">
        <img src="{{ asset('images/drone.png') }}" class="h-50" alt="Tech Icon">
    </div>
</div>
<div class="container my-5">
    <a href="{{ route('products.index') }}" class="btn btn-dark btn-lg px-5 py-3 fw-bold shadow-lg" 
       style="border-radius:50px; transition: transform 0.3s;"
       onmouseover="this.style.transform='scale(1.1)'" 
       onmouseout="this.style.transform='scale(1)'">
       Shop Now 
    </a>
    <h2 class="mb-4 fw-bold text-center">Featured Products</h2>
    
    <div class="row g-4">
        @foreach($featuredProducts as $product)
        <div class="col-md-3">
            <div class="card h-100 shadow-sm border-0 hover-shadow" style="transition: transform 0.3s;">
                <img src="{{ asset($product->image) }}" class="card-img-top" alt="{{ $product->name }}" style="height:200px; object-fit:cover;">
                <div class="card-body text-center">
                    <h5 class="card-title fw-bold">{{ $product->name }}</h5>
                    <p class="card-text text-primary fw-semibold">${{ number_format($product->price,2) }}</p>
                    <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary w-100">View</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<style>
.position-absolute img {
    animation: float 6s ease-in-out infinite;
}

@keyframes float {
    0% { transform: translateY(0px); }
    50% { transform: translateY(-20px); }
    100% { transform: translateY(0px); }
}
.hover-shadow:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 30px rgba(0,0,0,0.2);
}
</style>

@endsection