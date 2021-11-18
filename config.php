<?php

return [
    'production' => false,
    'baseUrl' => 'https://bristol-rl-group.netlify.app',
    'site' => [
        'title' => 'Bristol Reinforcement Learning',
        'description' => 'Official society website',
        'image' => 'default-share.png',
    ],
    'owner' => [
        'name' => 'BristolRL',
    ],
    'links' => [
        'su-webpage' => 'https://www.bristolsu.org.uk/',
        'github' => 'https://github.com/BristolReinforcementLearning',
    ],
    'collections' => [
        'posts' => [
            'path' => 'posts/{filename}',
            'sort' => '-date',
            'extends' => '_layouts.post',
            'section' => 'postContent',
            'isPost' => true,
            'comments' => false,
            'tags' => [],
            'hasTag' => function ($page, $tag) {
                return collect($page->tags)->contains($tag);
            },
            'prettyDate' => function ($page, $format = 'M j, Y') {
                return date($format, $page->date);
            },
        ],
        'tags' => [
            'path' => 'tags/{filename}',
            'extends' => '_layouts.tag',
            'section' => '',
            'name' => function ($page) {
                return $page->getFilename();
            },
        ],
    ],
];
