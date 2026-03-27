@extends('layouts.app')

@section('content')

<style>
.admin-title{
    font-weight:800;
}
.admin-card{
    border:none;
    border-radius:15px;
    box-shadow:0 10px 30px rgba(0,0,0,.08);
}
.product-img{
    width:60px;
    height:60px;
    object-fit:cover;
    border-radius:10px;
}
.btn-fancy{
    transition:.3s;
    font-weight:600;
}
.btn-fancy:hover{
    transform:translateY(-2px);
}

</style>
<div class="container py-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="admin-title"> Admin - Products</h2>

        <a href="{{ route('admin.products.create') }}" class="btn btn-success btn-fancy">
            AddProduct
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card admin-card">
        <div class="card-body p-0">

            <table class="table align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Price</th>
                        <th width="200">Actions</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                    <tr>
                        <td class="fw-bold">{{ $product->name }}</td>

                        <td>
                            <img src="{{ asset('storage/' . $product->image) }}" class="product-img">
                        </td>

                        <td class="text-primary fw-bold">
                            ${{ number_format($product->price,2) }}
                        </td>

                        <td>
                            <a href="{{ route('admin.products.edit',$product->id) }}"
                               class="btn btn-primary btn-sm btn-fancy">
                               Edit
                            </a>
                            <form action="{{ route('admin.products.delete',$product->id) }}"
                                  method="POST"
                                  style="display:inline-block;">
                                @csrf
                                <button class="btn btn-danger btn-sm btn-fancy">
                                    Delete
                                </button>
                            </form>

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>

</div>

@endsection