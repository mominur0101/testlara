@extends('admin.components.layouts')

@section('title')
    Create new Category
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center" style="min-height: 750px">

            <div class="col-md-6 my-4 ">

                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            <strong>{{ $error }}</strong>
                        </div>

                        <script>
                            var alertList = document.querySelectorAll(".alert");
                            alertList.forEach(function(alert) {
                                new bootstrap.Alert(alert);
                            });
                        </script>
                    @endforeach
                @endif
                @if (session('success'))
                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        <strong>{{ session('success') }}</strong>
                    </div>

                    <script>
                        var alertList = document.querySelectorAll(".alert");
                        alertList.forEach(function(alert) {
                            new bootstrap.Alert(alert);
                        });
                    </script>
                @endif
                <div class="card">
                    <h5 class="card-header">Create new Category.</h5>
                    <div class="card-body">

                        <form action="{{ route('admin.category.store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="categoryname" class="form-label">Category Name</label>
                                <input name="name" type="text" class="form-control" id="categoryname"
                                    value="{{ old('name') }}" placeholder="Enter Category Name" />
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="active"
                                    value="active" />
                                <label class="form-check-label" for="active"> Active </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="inactive"
                                    value="inactive" />
                                <label class="form-check-label" for="inactive"> Inactive </label>
                            </div>
                            <div class="mt-2">
                                <input type="submit" class="btn btn-primary" value="Submit" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection
