@extends('layouts.app')

@section('content')
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-5">
      <div class="card shadow-sm">
        <div class="card-body">
          <h3 class="card-title text-center mb-4 text-primary fw-bold">Login</h3>
          <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-3">
              <input type="email" name="email" class="form-control" placeholder="Email">
            </div>
            <div class="mb-3">
              <input type="password" name="password" class="form-control" placeholder="Password">
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" name="remember" class="form-check-input" id="rememberCheck">
              <label class="form-check-label" for="rememberCheck">Remember Me</label>
            </div>
            <button type="submit" class="btn btn-primary w-100">Login</button>
          </form>
          <p class="mt-3 text-center">Don't have an account? <a href="{{ route('register') }}">Register</a></p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection