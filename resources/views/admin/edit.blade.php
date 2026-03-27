@extends('layouts.app')

@section('content')

<div class="container py-5">

    <h2 class="fw-bold mb-4 text-light text-center bg-warning">Edit Product</h2>

    <form action="{{ route('admin.products.update',$product->id) }}" method="POST">
        @csrf

        <input type="text" name="name" value="{{ $product->name }}" class="form-control mb-3">

        <input type="number" step="0.01" name="price" value="{{ $product->price }}" class="form-control mb-3">

        <textarea name="description" class="form-control mb-3">{{ $product->description }}</textarea>

        <input type="text" name="image" value="{{ $product->image }}" class="form-control mb-3">

        <button class="btn btn-warning w-100">Edit</button>

    </form>

</div>

@endsection