<?php

return [
    'production' => false,
    'baseUrl' => 'https://johndoe.netlify.com',
    'site' => [
        'title' => 'My Jigsaw Blog',
        'description' => 'Personal blog of John Doe.',
        'image' => 'share-image.png',
    ],
    'owner' => [
        'name' => 'John Doe',
        'twitter' => 'johndoe',
        'github' => 'johndoe',
    ],
    'services' => [
        'analytics' => 'UA-XXXXX-Y',
        'disqus' => 'johndoe',
        'cloudinary' => 'johndoe',
        'jumprock' => 'johndoe',
    ],
    'collections' => [
        'posts' => [
            'path' => 'posts/{filename}',
            'sort' => '-date',
            'extends' => '_layouts.post',
            'section' => 'postContent',
            'isPost' => true,
            'comments' => true,
        ],
    ],
    'excerpt' => function ($page, $limit = 250, $end = '...') {
        return $page->isPost
            ? str_limit_soft(content_sanitize($page->getContent()), $limit, $end)
            : null;
    },
    'imageCdn' => function ($page, $path) {
        return "https://res.cloudinary.com/{$page->services->cloudinary}/image/upload/{$path}";
    },
];
