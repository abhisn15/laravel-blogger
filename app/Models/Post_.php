<?php

namespace App\Models;

class Post
{
    static $blog_posts = [
        [
            "title" => 'Judul Post Pertama',
            "slug" => 'judul-post-pertama',
            "author" => 'Abhi Surya Nugroho',
            "body" => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officiis iste quod illo minima in laboriosam veniam illum ullam blanditiis officia sequi sunt eius facere eligendi voluptatem corporis eum, quos provident asperiores architecto quaerat sed non itaque. Doloribus, sint. Sint iure nemo laborum, reprehenderit sapiente laboriosam est suscipit? Placeat aliquam debitis dicta mollitia autem maiores. Ad iusto dicta quis in quod deserunt minima. Vero id hic delectus veniam omnis amet nam doloribus quis, repudiandae eos perspiciatis quas a architecto, voluptas, sed aliquid ipsam voluptatibus ducimus enim. Pariatur asperiores, eaque, nobis saepe consequatur nam harum dolor, minima modi illum ipsum aliquid iusto!.'
        ],
        [
            "title" => 'Judul Post Kedua',
            "slug" => 'judul-post-kedua',
            "author" => 'Ari Purnomo Aji',
            "body" => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officiis iste quod illo minima in laboriosam veniam illum ullam blanditiis officia sequi sunt eius facere eligendi voluptatem corporis eum, quos provident asperiores architecto quaerat sed non itaque. Doloribus, sint. Sint iure nemo laborum, reprehenderit sapiente laboriosam est suscipit? Placeat aliquam debitis dicta mollitia autem maiores. Ad iusto dicta quis in quod deserunt minima. Vero id hic delectus veniam omnis amet nam doloribus quis, repudiandae eos perspiciatis quas a architecto, voluptas, sed aliquid ipsam voluptatibus ducimus enim. Pariatur asperiores, eaque, nobis saepe consequatur nam harum dolor, minima modi illum ipsum aliquid iusto!.'
        ],
        [
            "title" => 'Judul Post Ketiga',
            "slug" => 'judul-post-ketiga',
            "author" => 'Donny Kuspradana',
            "body" => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officiis iste quod illo minima in laboriosam veniam illum ullam blanditiis officia sequi sunt eius facere eligendi voluptatem corporis eum, quos provident asperiores architecto quaerat sed non itaque. Doloribus, sint. Sint iure nemo laborum, reprehenderit sapiente laboriosam est suscipit? Placeat aliquam debitis dicta mollitia autem maiores. Ad iusto dicta quis in quod deserunt minima. Vero id hic delectus veniam omnis amet nam doloribus quis, repudiandae eos perspiciatis quas a architecto, voluptas, sed aliquid ipsam voluptatibus ducimus enim. Pariatur asperiores, eaque, nobis saepe consequatur nam harum dolor, minima modi illum ipsum aliquid iusto!.'
        ]
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