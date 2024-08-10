@extends('admin.components.layouts')

@section('title')
    Manage Category
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h4 class="py-3">Manage Category</h4>
            </div>
            <div class="col-md-6">
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
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="table-responsive">
                <table class="table table-primary table-bordered table-striped">
                    <thead>
                        <tr>
                            <th scope="col">SL No.</th>
                            <th scope="col">Name</th>
                            <th scope="col">Slug</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr class="">
                                <td scope="row">{{ $category->id }}</td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->slug }}</td>
                                <td>{{ Str::ucfirst($category->status) }}</td>
                                <td style="display: flex">
                                    <a href="{{ route('admin.category.show', $category->id) }}" class="btn btn-info btn-view btn-sm mx-1">View</a>
                                    <a href="{{ route('admin.category.edit', $category->id) }}" class="btn btn-primary btn-view btn-sm mx-1">Edit</a>
                                    <form action="{{ route('admin.category.destroy', $category->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm mx-1">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
                {{ $categories->links('vendor.pagination.bootstrap-5') }}

            </div>
        </div>
    </div>
@endsection
