<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function home()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }
    public function show($anyname)
    {
        return "This is a post show page" . " " . $anyname;
    }

    public function title($title)
    {
        return 'Your Output Result is: ' . $title;
    }

    public function post($id)
    {
        echo $id;
    }
}
