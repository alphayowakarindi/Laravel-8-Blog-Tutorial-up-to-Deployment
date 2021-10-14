<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index(){
        return view('blogPosts.blog');
    }

    public function create(){
        return view('blogPosts.create-blog-post');
    }

    public function store(Request $request){
       $request->validate([
           'title' => 'required',
           'image' => 'required | image',
           'body' => 'required'
       ]);
       
       $title = $request->input('title');
       $slug = Str::slug($title, '-');
       $user_id = Auth::user()->id;
       $body = $request->input('body');
    
       
       dd('Validation passed. You can now request the input');
    }

    public function show(){
        return view('blogPosts.single-blog-post');
    }
}
