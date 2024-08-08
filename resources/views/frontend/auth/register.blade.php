@extends('frontend.components.layouts')

@section('title')
    User Register
@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h5>User Registration Form</h5>
        </div>
        <div class="card-body">
            {{-- @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show pb-1" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <strong>Your Request is not valid!</strong>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif --}}
            @if (session('message'))
                <div class="alert alert-{{ session('type') }} alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <strong>{{ session('message') }}</strong>
                </div>

                <script>
                    var alertList = document.querySelectorAll(".alert");
                    alertList.forEach(function(alert) {
                        new bootstrap.Alert(alert);
                    });
                </script>
            @endif

            <form action="{{ route('user.registration') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-3">
                    <label for="name">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid  @enderror" id="name"
                        name="name" value="{{ old('name') }}" placeholder="Enter your Name.">
                    @error('name')
                        <span class="text-danger fst-italic">{{ $message }}</span>
                    @enderror
                </div>
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
                <div class="form-group mb-3">
                    <label for="confirm_password">Confirm Password</label>
                    <input type="password" class="form-control" id="confirm_password" name="password_confirmation"
                        placeholder="Enter Confirm password.">
                </div>
                <div class="form-group mb-3">
                    <label for="photo">Prifile Photo</label>
                    <input type="file" id="photo" name="photo">
                    @error('photo')
                        <span class="text-danger fst-italic">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Registration</button>
                </div>
            </form>
        </div>
    </div>
@endsection
