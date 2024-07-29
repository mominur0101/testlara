<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function posts(Request $request)
    {
        //return $request->all();
        return $request->input('name', 'momin');
    }
}