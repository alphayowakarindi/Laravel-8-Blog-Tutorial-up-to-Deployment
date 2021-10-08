<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        return view('blog');
    }

    public function show(){
        return view('single-blog-post');
    }
}
