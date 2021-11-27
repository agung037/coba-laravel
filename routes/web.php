<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Agung Kurniawan",
        "email" => "agungk@kemenkeu.go.id",
        "image" => "img/person1.jpg"
    ]);
});




Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "author" => "Sandhika Galih",
            "slug" => "judul-post-pertama",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, nesciunt ad quam quo amet quis iure beatae quisquam porro sed, omnis eos. Velit nam vel perferendis dignissimos nihil laboriosam harum sequi itaque consequatur doloremque libero nobis corporis pariatur minima non praesentium maxime tenetur sint, molestiae blanditiis debitis! Perspiciatis ex, fugit id quos illum fuga, iste, atque vel hic saepe harum vero distinctio necessitatibus repellendus placeat pariatur aliquam aut iure ratione reprehenderit! Deleniti vitae facilis libero aliquam est? Ipsum, quis numquam!"
        ],
        [
            "title" => "Judul Post Kedua",
            "author" => "Dody Galih",
            "slug" => "judul-post-kedua",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, nesciunt ad quam quo amet quis iure beatae quisquam porro sed, omnis eos. Velit nam vel perferendis dignissimos nihil laboriosam harum sequi itaque consequatur doloremque libero nobis corporis pariatur minima non praesentium maxime tenetur sint, molestiae blanditiis debitis! Perspiciatis ex, fugit id quos illum fuga, iste, atque vel hic saepe harum vero distinctio necessitatibus repellendus placeat pariatur aliquam aut iure ratione reprehenderit! Deleniti vitae facilis libero aliquam est? Ipsum, quis numquam! orro sed, omnis eos. Velit nam vel perferendis dignissimos nihil laboriosam harum sequi itaque consequatur doloremque libero nobis corporis pariatur minima non praesentium maxime"
        ],

    ];
    return view('posts', [
        "title" => "Post",
        "posts" => $blog_posts
    ]);
});





//halaman single post
Route::get('posts/{slug}', function($slug){
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "author" => "Sandhika Galih",
            "slug" => "judul-post-pertama",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, nesciunt ad quam quo amet quis iure beatae quisquam porro sed, omnis eos. Velit nam vel perferendis dignissimos nihil laboriosam harum sequi itaque consequatur doloremque libero nobis corporis pariatur minima non praesentium maxime tenetur sint, molestiae blanditiis debitis! Perspiciatis ex, fugit id quos illum fuga, iste, atque vel hic saepe harum vero distinctio necessitatibus repellendus placeat pariatur aliquam aut iure ratione reprehenderit! Deleniti vitae facilis libero aliquam est? Ipsum, quis numquam!"
        ],
        [
            "title" => "Judul Post Kedua",
            "author" => "Dody Galih",
            "slug" => "judul-post-kedua",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, nesciunt ad quam quo amet quis iure beatae quisquam porro sed, omnis eos. Velit nam vel perferendis dignissimos nihil laboriosam harum sequi itaque consequatur doloremque libero nobis corporis pariatur minima non praesentium maxime tenetur sint, molestiae blanditiis debitis! Perspiciatis ex, fugit id quos illum fuga, iste, atque vel hic saepe harum vero distinctio necessitatibus repellendus placeat pariatur aliquam aut iure ratione reprehenderit! Deleniti vitae facilis libero aliquam est? Ipsum, quis numquam! orro sed, omnis eos. Velit nam vel perferendis dignissimos nihil laboriosam harum sequi itaque consequatur doloremque libero nobis corporis pariatur minima non praesentium maxime"
        ],

    ];

    $new_post = [];
    foreach($blog_posts as $post)
    {
        if($post["slug"] == $slug)
        {
            $new_post = $post;
        }
    }
    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});