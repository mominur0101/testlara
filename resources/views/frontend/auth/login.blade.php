@extends('frontend.components.layouts')

@section('title')
    User Register
@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h5>User Login Form</h5>
        </div>
        <div class="card-body">

            @if (session('errorinfo'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <strong>{{ session('errorinfo') }}</strong>
                </div>

                <script>
                    var alertList = document.querySelectorAll(".alert");
                    alertList.forEach(function(alert) {
                        new bootstrap.Alert(alert);
                    });
                </script>
            @endif

            <form action="{{ route('user.login') }}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="email">Email Address</label>
                    <input type="email" class="form-control @error('email') is-invalid  @enderror" id="email"
                        name="email" value="{{ old('email') }}" placeholder="Enter your Email Address.">
                    @error('email')
                        <span class="text-danger fst-italic">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="password">Password</label>
                    <input type="password" class="form-control @error('password') is-invalid  @enderror" id="password"
                        name="password" placeholder="Enter your password.">
                    @error('password')
                        <span class="text-danger fst-italic">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Login</button>
                </div>
            </form>
        </div>
    </div>
@endsection
