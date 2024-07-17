<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('test', function () {
    return 'Hello';
});



/*
Route::get('url/suburl', [StudentController::class, 'methodname'])->name('url/name');

Route::get('view', [App\Http\Controllers\StudentController::class, 'viewmethod']);

Route::group(['prefix' => 'web/post'], function () {
    Route::get('/', [PostController::class, 'allpost']);
    Route::post('/', [PostController::class, 'store']);
    Route::get('/1', [PostController::class, 'paginatepost']);
});

Route::prefix('test/post')->group(function () {
    Route::get('/', [PostController::class, 'allpost']);
    Route::post('/', [PostController::class, 'store']);
    Route::get('/1', [PostController::class, 'paginatepost']);
});

    Route::get('/', [PostController::class, 'home'])->name('home');

Route::prefix('site')->name('about.')->group(function () {
    Route::match(['get', 'post'],'/about', [PostController::class, 'about'])->name('page');
});

Route::get('post/12', [PostController::class, 'show']);

Route::get('post/{id}', [PostController::class, 'show']);

Route::get('post/{id}', function($idname) {
    return "Cluser Function test"." ". $idname;
});

Route::get('post/{title?}', [PostController::class, 'title']);
Route::get('post/{id}', function ($id) {
    echo "View Your text = " . $id;
})->where('id', '[0-9]+');


Route::get('post/{id}', [PostController::class, 'post'])->where('id', '[0-9]');

Route::get('post/{title}', [PostController::class, 'title'])->where('title', '[0-9A-Za-z]');

Route::get('post/{id}', function($id){
    echo $id;
})->whereNumber('id');



*/


Route::get('post/{id}', [PostController::class, 'title']);
