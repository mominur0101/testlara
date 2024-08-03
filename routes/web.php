<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\SiteController;
/*
Route::get('/', function () {
    return view('index');
});


Route::get('test', function () {
    return 'Hello';
});



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


Route::get('post/{id}', [PostController::class, 'title']);



Route::get('/post', [PostController::class, 'index']);
Route::post('/post', [PostController::class, 'edit']);
Route::put('/post/{id}', [PostController::class, 'edit']);
Route::delete('/post/{id}', [PostController::class, 'delete']);
Route::resource('/posts', PostController::class);

*/



//Route::get('/post', [PostController::class, 'posts']);
//Route::resource('post', StudentController::class);

//Route::get("site", [App\Http\Controllers\SiteController::class, "siteview"]);



///Route::get('/post', [SiteController::class, 'siteview']);
//Route::get('/view', [SiteController::class, 'view']);

// web.php (routes file)
//Route::get('/about', [SiteController::class, 'about'])->name('about');
//Route::get('/contact', [SiteController::class, 'contact'])->name('contact');
//Route::apiResource('/post', SiteController::class)->except('show');

Route::get('/', [SiteController::class, 'index'])->name('index');
Route::get('/post', [SiteController::class, 'singlePost']);
//User Login Register Route

Route::prefix('/user')->name('user.')->group(function () {
    Route::get('/login', [SiteController::class, 'showLoginForm'])->name('login-form');
    Route::post('/login', [SiteController::class, 'login'])->name('login');
    Route::get('/register', [SiteController::class, 'showRegisterForm'])->name('register-form');
    Route::post('/register', [SiteController::class, 'registration'])->name('registration');
});
