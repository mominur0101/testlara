@extends('admin.components.layouts')

@section('title')
    Category View
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center" style="min-height: 750px">

            <div class="col-md-12 my-4 ">

                <div class="card">
                    <h5 class="card-header">Category View</h5>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-primary table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Slug</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Author</th>
                                        <th scope="col">Created at</th>
                                        <th scope="col">Updated at</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($category)
                                        <tr class="">
                                            <td scope="row">{{ $category->id }}</td>
                                            <td>{{ $category->name }}</td>
                                            <td>{{ $category->slug }}</td>
                                            <td>{{ Str::ucfirst($category->status) }}</td>
                                            <td>{{ auth()->user()->name }}</td>
                                            <td>{{ $category->created_at }}</td>
                                            <td>{{ $category->updated_at }}</td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection
