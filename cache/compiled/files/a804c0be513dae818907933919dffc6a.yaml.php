<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/blog/user/blueprints/admin/pages/new_blog_item.yaml',
    'modified' => 1539122311,
    'data' => [
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'section' => [
                    'type' => 'section',
                    'title' => 'Add Blog Item'
                ],
                'title' => [
                    'type' => 'text',
                    'label' => 'Blog Item Title',
                    'validate' => [
                        'required' => true
                    ]
                ],
                'test' => [
                    'type' => 'display',
                    'size' => 'large',
                    'label' => NULL,
                    'content' => 'This page will appear under your Blog page.'
                ],
                'folder' => [
                    'type' => 'hidden',
                    'default' => '@slugify-title'
                ],
                'route' => [
                    'type' => 'hidden',
                    'default' => '/blog'
                ],
                'name' => [
                    'type' => 'hidden',
                    'default' => 'item'
                ],
                'visible' => [
                    'type' => 'hidden',
                    'default' => ''
                ],
                'blueprint' => [
                    'type' => 'blueprint'
                ]
            ]
        ]
    ]
];
