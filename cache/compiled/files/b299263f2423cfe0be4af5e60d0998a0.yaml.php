<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/blog/user/config/site.yaml',
    'modified' => 1539122311,
    'data' => [
        'title' => 'Outragefatigue.blog',
        'default_lang' => 'United States',
        'author' => [
            'name' => 'Jerry',
            'email' => 'g.gravitas@gmail.com'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag',
            2 => 'month',
            3 => 'author'
        ],
        'metadata' => [
            'description' => 'Sick and tired or being sick and tired'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'blog' => [
            'route' => ''
        ]
    ]
];
