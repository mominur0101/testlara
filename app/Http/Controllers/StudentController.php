<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function methodname()
    {
        return "Return View Text";
    }

    public function viewmethod(){
        return view('folder.testpage');
    } 
}