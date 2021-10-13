<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        return view('blogPosts.blog');
    }

    public function create(){
        return view('blogPosts.create-blog-post');
    }

    public function store(Request $request){
       $title = $request->input('title');

       dd($title);
    }

    public function show(){
        return view('blogPosts.single-blog-post');
    }
}
