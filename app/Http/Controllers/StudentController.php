<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return "Hello";
    }


   public function create(){
    return "Hello create";
   }
   public function edit(){
    return "Hi, Edit Method";
   }
}
