<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;


class PostController extends Controller
{
    // method untuk menampilkan semua posts
    public function index()
    {
        return view('posts', [
            "title" => "Post",
            // "posts" => Post::all()
            "posts" => Post::latest()->get()
        ]);
    }


    // method untuk menampilkan 1 spesifik post
    public function show(Post $post)
    {
        return view('post', [
            "title" => "Single Post",
            "post" => $post
        ]);
    }
}
