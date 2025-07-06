<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});
Route::get('/about', function () {
    return view('about', ['title' => 'About', 'name' => 'Deki Firmansyah']);
});
Route::get('/posts', function () {
    return view('posts', [
        'title' => 'Blog',
        'posts' => [
            [
                'id' => 1,
                'slug' => 'judul-artikel-1',
                'title' => 'Judul Artikel 1',
                'author' => 'Deki Firmansyah',
                'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                Quia similique iusto corrupti tempore aperiam maiores quo ipsa reprehenderit eum nesciunt. 
                Tempore quam veritatis eum magni dicta nam neque facere aliquid?'
            ],
            [
                'id' => 2,
                'slug' => 'judul-artikel-2',
                'title' => 'Judul Artikel 2',
                'author' => 'Deki Firmansyah',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Pariatur accusamus aliquam ex eaque provident omnis corporis nobis vitae, 
                magnam architecto neque harum, nihil dolor voluptatem tempora maiores illum! 
                Temporibus, quibusdam. Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                Quia similique iusto corrupti tempore aperiam maiores quo ipsa reprehenderit eum nesciunt. 
                Tempore quam veritatis eum magni dicta nam neque facere aliquid?'
            ],
            [
                'id' => 3,
                'slug' => 'judul-artikel-3',
                'title' => 'Judul Artikel 3',
                'author' => 'Deki Firmansyah',
                'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing 
                elit. Quas nisi ducimus illo. Ab natus explicabo debitis minus corrupti, 
                odit, quos optio quibusdam harum amet id voluptatum quis facilis maiores ut!'
            ]
        ]
    ]);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Deki Firmansyah',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                Quia similique iusto corrupti tempore aperiam maiores quo ipsa reprehenderit eum nesciunt. 
                Tempore quam veritatis eum magni dicta nam neque facere aliquid?'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Deki Firmansyah',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Pariatur accusamus aliquam ex eaque provident omnis corporis nobis vitae, 
                magnam architecto neque harum, nihil dolor voluptatem tempora maiores illum! 
                Temporibus, quibusdam. Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                Quia similique iusto corrupti tempore aperiam maiores quo ipsa reprehenderit eum nesciunt. 
                Tempore quam veritatis eum magni dicta nam neque facere aliquid?'
        ],
        [
            'id' => 3,
            'slug' => 'judul-artikel-3',
            'title' => 'Judul Artikel 3',
            'author' => 'Deki Firmansyah',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing 
                elit. Quas nisi ducimus illo. Ab natus explicabo debitis minus corrupti, 
                odit, quos optio quibusdam harum amet id voluptatum quis facilis maiores ut!'
        ]
    ];

    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});



Route::get('/contact', function () {
    return view('contact', ['title' => 'contact']);
});
