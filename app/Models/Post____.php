<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "author" => "Sandhika Galih",
            "slug" => "judul-post-pertama",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, nesciunt ad quam quo amet quis iure beatae quisquam porro sed, omnis eos. Velit nam vel perferendis dignissimos nihil laboriosam harum sequi itaque consequatur doloremque libero nobis corporis pariatur minima non praesentium maxime tenetur sint, molestiae blanditiis debitis! Perspiciatis ex, fugit id quos illum fuga, iste, atque vel hic saepe harum vero distinctio necessitatibus repellendus placeat pariatur aliquam aut iure ratione reprehenderit! Deleniti vitae facilis libero aliquam est? Ipsum, quis numquam!"
        ],
        [
            "title" => "Beauty and The Boss",
            "author" => "Michael Saktiawan",
            "slug" => "judul-post-kedua",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, nesciunt ad quam quo amet quis iure beatae quisquam porro sed, omnis eos. Velit nam vel perferendis dignissimos nihil laboriosam harum sequi itaque consequatur doloremque libero nobis corporis pariatur minima non praesentium maxime tenetur sint, molestiae blanditiis debitis! Perspiciatis ex, fugit id quos illum fuga, iste, atque vel hic saepe harum vero distinctio necessitatibus repellendus placeat pariatur aliquam aut iure ratione reprehenderit! Deleniti vitae facilis libero aliquam est? Ipsum, quis numquam! orro sed, omnis eos. Velit nam vel perferendis dignissimos nihil laboriosam harum sequi itaque consequatur doloremque libero nobis corporis pariatur minima non praesentium maxime"
        ],

    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
