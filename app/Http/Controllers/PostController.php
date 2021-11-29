<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;


class PostController extends Controller
{
    // method untuk menampilkan semua posts
    public function index()
    {
        $posts = Post::latest();

        if(request('search'))
        {
            $posts->where('title', 'like', '%' . request('search') . '%')
                  ->orWhere('body', 'like', '%' . request('search') . '%');
        }

        return view('posts', [
            "title" => "All Posts",
            "active" => 'posts',
            "posts" => $posts->get()
        ]);
    }


    // method untuk menampilkan 1 spesifik post
    public function show(Post $post)
    {
        return view('post', [
            "title" => "Single Post",
            "active" => 'posts',
            "post" => $post
        ]);
    }
}
