@extends('layouts.app')

@section('content')

<div class="container py-5">

    <h2 class="fw-bold mb-4 p-3 bg-success text-center text-light">Create New Product</h2> 

    <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <input type="text" name="name" placeholder="Name" class="form-control mb-3">

        <input type="number" step="0.01" name="price" placeholder="Price" class="form-control mb-3">

        <textarea name="description" placeholder="Description" class="form-control mb-3"></textarea>

        <input type="file" name="image" placeholder="image" class="form-control mb-3">

        <button class="btn btn-success w-100">Save</button>

    </form>

</div>

@endsection