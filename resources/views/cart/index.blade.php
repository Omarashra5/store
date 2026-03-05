@extends('layouts.app')

@section('content')

<style>
.cart-title{
    font-weight:800;
}
.cart-card{
    border:none;
    border-radius:15px;
    box-shadow:0 10px 30px rgba(0,0,0,.08);
}
.cart-img{
    width:70px;
    height:70px;
    object-fit:cover;
    border-radius:10px;
    margin-right:10px;
}
.qty-input{
    width:80px;
    text-align:center;
}
.total-box{
    background:#f8f9fa;
    padding:25px;
    border-radius:15px;
    box-shadow:0 5px 20px rgba(0,0,0,.06);
}
.btn-fancy{
    transition:.3s;
    font-weight:600;
}

.btn-fancy:hover{
    transform:translateY(-2px);
}

.empty-cart{
    text-align:center;
    padding:80px 0;
}

.product-info{
    display:flex;
    align-items:center;
}
.product-name{
    font-weight:600;
}
</style>

<div class="container py-5">

<h2 class="cart-title mb-4">Shopping Cart</h2>
@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

@if(session('error'))
    <div class="alert alert-danger">{{ session('error') }}</div>
@endif
@if($cart && count($cart) > 0)

@php $total = 0; @endphp

<div class="row">
    <div class="col-lg-8">

        <div class="card cart-card">
            <div class="card-body p-0">

                <table class="table align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($cart as $id => $item)
                        @if($id)
                        @php $itemTotal = $item['price'] * $item['quantity']; $total += $itemTotal; @endphp
                        <tr>
                            <td>
                                <div class="product-info">
                                    <img src="{{ $item['image'] }}" class="cart-img">
                                    <span class="product-name">{{ $item['name'] }}</span>
                                </div>
                            </td>
                            <td>${{ number_format($item['price'],2) }}</td>
                            <td>
                                <form action="{{ route('cart.update', $id) }}" method="POST" class="d-flex gap-2 align-items-center">
                                    @csrf
                                    <input type="number" name="quantity" value="{{ $item['quantity'] }}" min="1" class="form-control qty-input">
                                    <button class="btn btn-primary btn-sm btn-fancy">Update</button>
                                </form>
                            </td>
                            <td>${{ number_format($itemTotal,2) }}</td>
                            <td>
                                <form action="{{ route('cart.remove', $id) }}" method="POST">
                                    @csrf
                                    <button class="btn btn-danger btn-sm">Remove</button>
                                </form>
                            </td>
                        </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>

    </div>
    <div class="col-lg-4">
        <div class="total-box">
            <h4 class="fw-bold mb-3">Order Summary</h4>
            <hr>
            <h5 class="d-flex justify-content-between">
                <span>Total:</span>
                <span class="text-primary fw-bold">
                    ${{ number_format($total,2) }}
                </span>
            </h5>
            <a href="{{ route('cart.checkout') }}"
               class="btn btn-success w-100 mt-4 btn-lg btn-fancy">
               Proceed To Checkout 
            </a>
        </div>
    </div>

</div>

@else
<div class="empty-cart">
    <h3 class="fw-bold mb-3"> Your cart is empty</h3>
    <p class="text-muted">Looks like you haven't added anything yet.</p>
    <a href="{{ route('products.index') }}" class="btn btn-primary btn-lg mt-3">
        Start Shopping
    </a>
</div>

@endif

</div>

@endsection