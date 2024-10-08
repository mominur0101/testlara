<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>@yield('title')</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="/assets/frontend/assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="/assets/frontend/css/styles.css" rel="stylesheet" />
</head>

<body>
    <!-- Responsive navbar-->
    @include('admin.components.header')

    <!-- Page header with logo and tagline-->
    {{-- <header class="py-5 bg-light border-bottom mb-4">
        <div class="container">
            <div class="text-center my-5">
                <h1 class="fw-bolder">Welcome to Blog Home!</h1>
                <p class="lead mb-0">A Bootstrap 5 starter layout for your next blog homepage</p>
            </div>
        </div>
    </header> --}}
    <!-- Page content-->
    {{-- <div class="container">
        <div class="row">
            <!-- Blog entries-->
            <div class="col-lg-12"> --}}
               @yield('content')
            {{-- </div>
        </div>
    </div> --}}
    <!-- Footer-->
    @include('admin.components.footer')
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="/assets/frontend/js/scripts.js"></script>
</body>

</html>
