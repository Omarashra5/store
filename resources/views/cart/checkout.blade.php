@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Checkout</h2>
    @if(session('cart') && count(session('cart')) > 0)
    <div class="row">
        <div class="col-md-6">
            <form method="POST" action="{{ route('cart.process') }}">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Full Name</label>
                    <input type="text" name="name" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Address</label>
                    <textarea name="address" class="form-control" rows="3" required></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Phone</label>
                    <input type="text" name="phone" class="form-control" required>
                </div>

                <button class="btn btn-success">Place Order</button>
            </form>
        </div>
        <div class="col-md-6">
            <h4>Your Cart</h4>
            <ul class="list-group">
                @php $total = 0; @endphp
                @foreach(session('cart') as $item)
                    @php $total += $item['price'] * $item['quantity']; @endphp
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        {{ $item['name'] }} =  {{ $item['quantity'] }}
                        <span>${{ number_format($item['price'] * $item['quantity'], 2) }}</span>
                    </li>
                @endforeach
                <li class="list-group-item d-flex justify-content-between align-items-center fw-bold">
                    Total <span>${{ number_format($total, 2) }}</span>
                </li>
            </ul>
        </div>
    </div>
    @else
        <p>Your cart is empty!</p>
    @endif
</div>
@endsection