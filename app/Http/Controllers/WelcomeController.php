<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class WelcomeController extends Controller
{
    public function index(){
        $posts = Post::latest()->take(4)->get();
        return view('welcome', compact('posts'));
    }
}
