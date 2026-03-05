@extends('layouts.app')

@section('content')
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-5">
      <div class="card shadow-sm">
        <div class="card-body">
          <h3 class="card-title text-center mb-4 text-primary fw-bold">Register</h3>
          <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="mb-3">
              <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
            <div class="mb-3">
              <input type="email" name="email" class="form-control" placeholder="Email">
            </div>
            <div class="mb-3">
              <input type="password" name="password" class="form-control" placeholder="Password">
            </div>
            <div class="mb-3">
              <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password">
            </div>
            <button type="submit" class="btn btn-primary w-100">Register</button>
          </form>
          <p class="mt-3 text-center">Already have an account? <a href="{{ route('login') }}">Login</a></p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection