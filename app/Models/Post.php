<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post
{
     private static $blog_posts = [
    [
        "title" => "judul post pertama",
        "slug" => "judul-post-pertama",
        "author" => "Robiatul adawiyah",
        "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempora exercitationem nihil mollitia porro
        inventore asperiores expedita ea eaque, minus dolore molestias, debitis dicta accusantium provident eum
        hic quo repellendus error fuga sit nostrum in sunt? Mollitia esse tenetur vitae molestias veritatis facere
         ipsam adipisci id beatae expedita assumenda optio earum, reiciendis, voluptatum praesentium quasi doloremque
         aut? Voluptate porro iure asperiores corporis commodi officia! Amet, culpa. Voluptatum illo est dignissimos
          itaque officia ex, cum debitis consequatur autem vitae consectetur doloribus ab hic suscipit ullam id aliquid
          excepturi! Quibusdam, quos tenetur ex at ipsam eum veniam animi voluptatem, soluta explicabo, assumenda maiores?
        "
    ],
    [
        "title" => "judul post kedua",
        "slug" => "judul-post-kedua",
        "author" => "Biru herlangga maha putra",
        "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempora exercitationem nihil mollitia porro
        inventore asperiores expedita ea eaque, minus dolore molestias, debitis dicta accusantium provident eum
        hic quo repellendus error fuga sit nostrum in sunt? Mollitia esse tenetur vitae molestias veritatis facere
         ipsam adipisci id beatae expedita assumenda optio earum, reiciendis, voluptatum praesentium quasi doloremque
         aut? Voluptate porro iure asperiores corporis commodi officia! Amet, culpa. Voluptatum illo est dignissimos
          itaque officia ex, cum debitis consequatur autem vitae consectetur doloribus ab hic suscipit ullam id aliquid
          excepturi! Quibusdam, quos tenetur ex at ipsam eum veniam animi voluptatem, soluta explicabo, assumenda maiores?
        "
    ],
];

public static function all()
{
    return self::$blog_posts;
    $post = [];
    foreach($posts as $p) {
        if ($p["slug"]=== $slug) {
            $new_post = $p;

    }
}
return $post;
}


public static function find($slug)
{
$posts = self::$blog_posts;
}
}

