@extends('frontend.components.layouts')

@section('title')
    Home page
@endsection
@section('content')
    <!-- Featured blog post-->
    <x-single-post post-title="This is our first Title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis
        aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi
        vero voluptate voluptatibus possimus, veniam magni quis!</x-single-post>
    <x-single-post post-title="This is our second Title">ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis
        aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi
        vero voluptate voluptatibus possimus, veniam magni quis!</x-single-post>
@endsection
