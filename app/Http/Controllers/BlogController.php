<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index(){
        $posts = Post::latest()->get();
        return view('blogPosts.blog', compact('posts'));
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

       //File upload
       $imagePath = 'storage/' . $request->file('image')->store('postsImages', 'public');

       $post = new Post();
       $post->title = $title;
       $post->slug = $slug;
       $post->user_id = $user_id;
       $post->body = $body;
       $post->imagePath = $imagePath;

       $post->save();
       
       return redirect()->back()->with('status', 'Post Created Successfully');
    }

    // public function show($slug){
    //     $post = Post::where('slug', $slug)->first();
    //     return view('blogPosts.single-blog-post', compact('post'));
    // }

    // Using Route model binding
    public function show(Post $post){
        return view('blogPosts.single-blog-post', compact('post'));
    }
}
