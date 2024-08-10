<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRegistration;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Exception;
use Illuminate\Support\Facades\Auth;

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

        $photo = $request->file('photo');
        if ($photo) {
            $file_name = date('s-i-h-M-Y-d-') . rand(11111, 99999) . "." . $photo->getClientOriginalExtension();
            $photo->storeAs('users', $file_name);
        }

        try {
            User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => bcrypt($request->input('password')),
            ]);

            session()->flash('type', 'success');
            session()->flash('message', 'User Registration Successful');
        } catch (Exception $exception) {
            session()->flash('type', 'danger');
            session()->flash('message', 'User Registration Field!!!');
        }
        return redirect()->back();
    }



    public function showLoginForm()
    {
        return view('frontend.auth.login');
    }

    // public function login(Request $request)
    // {
    //     $userdata = $request->validate([
    //         'email'     => 'required|email',
    //         'password'  => 'required'
    //     ]);

    //     if (auth()->attempt($userdata)) {
    //         return redirect('/');
    //     } else {
    //         session()->flash('erroninfo', 'Your Credentials Not Match!');
    //         return redirect()->back();

    //     };
    // }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (auth()->attempt($credentials)) {
            // Authentication passed
            return redirect()->route('admin.dashboard');
        } else {
            session()->flash('errorinfo', 'Your Credentials Not Match!');
            // Authentication failed
            return redirect()->back();
        }
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/');
    }
}
