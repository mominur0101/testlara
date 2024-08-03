<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRegistration;
use Illuminate\Support\Facades\Validator;

class SiteController extends Controller
{
    public function index()
    {

        return view('frontend.home');
    }

    public function singlePost()
    {
        return view('frontend.single-post');
    }

    public function showRegisterForm()
    {
        return view('frontend.auth.register');
    }

    public function registration(UserRegistration $request)
    {
        $request->validate([
            'name'      => 'required|string',
            'email'     => 'required|email',
            'password'  => 'required|min:6|confirmed',
            'photo'     => 'required|image'
        ]);

        $photo = $request->file('photo');
        if ($photo->isValid()) {
            $file_name = date('s-i-h-M-Y-d-') . rand(11111, 99999) . "." . $photo->getClientOriginalExtension();
            $photo->storeAs('users', $file_name);
        }

        session()->flash('message', 'User Registration Successful');
        return redirect()->back();
    }

    public function showLoginForm()
    {
        return view('frontend.auth.login');
    }
    public function login(Request $request)
    {
        $request->validate([
            'email'     => 'required|string',
            'password'  => 'required|min:6'
        ]);

        auth()->attempt(['email' => 'mominur0008@gmail.com', 'password' => '123456']);
    }
}
