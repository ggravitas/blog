<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/temp/repos/blog/user/config/plugins/jscomments.yaml',
    'modified' => 1535999476,
    'data' => [
        'enabled' => true,
        'active' => true,
        'provider' => 'facebook',
        'providers' => [
            'disqus' => [
                'show_count' => false
            ],
            'facebook' => [
                'app_id' => '437950656695336',
                'num_posts' => 5,
                'colorscheme' => 'light',
                'order_by' => 'social',
                'width' => '100%'
            ],
            'googleplus' => [
                'show_count' => false,
                'width' => '100%'
            ],
            'isso' => [
                'builtin_css' => true,
                'reply_to_self' => false,
                'require' => [
                    'author' => true,
                    'email' => true
                ],
                'comments' => [
                    'number' => 10,
                    'nested_number' => 5,
                    'reveal' => 5
                ],
                'avatar' => [
                    'enabled' => true
                ],
                'vote' => [
                    'enabled' => true,
                    'levels' => '-5,5'
                ]
            ],
            'muut' => [
                'channel' => 'General',
                'widget' => false,
                'show_online' => false,
                'show_title' => false,
                'upload' => false,
                'share' => true
            ],
            'hypercomments' => [
                'social' => [
                    0 => 'vk',
                    1 => 'odnoklassniki',
                    2 => 'yandex',
                    3 => 'mailru',
                    4 => 'google',
                    5 => 'livejournal',
                    6 => 'facebook',
                    7 => 'twitter',
                    8 => 'tumblr'
                ]
            ]
        ]
    ]
];
