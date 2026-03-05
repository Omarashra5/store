@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h2 class="mb-4 text-center fw-bold">Contact Us</h2>
    <p class="text-center mb-5">Have questions or feedback? We'd love to hear from you!</p>
    
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form>
                <div class="mb-3">
                    <label class="form-label fw-semibold">Full Name</label>
                    <input type="text" class="form-control" placeholder="Your Name" required>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-semibold">Email</label>
                    <input type="email" class="form-control" placeholder="Your Email" required>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-semibold">Message</label>
                    <textarea class="form-control" rows="5" placeholder="Your Message" required></textarea>
                </div>
                <button class="btn btn-primary w-100 fw-bold py-2">Send Message</button>
            </form>
        </div>
    </div>
</div>
@endsection