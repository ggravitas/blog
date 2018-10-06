<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/jerrybrahm/repos/blog/user/config/plugins/git-sync.yaml',
    'modified' => 1538775353,
    'data' => [
        'enabled' => false,
        'text_var' => 'Custom Text added by the **Git Sync** plugin (disable plugin to remove)',
        'folders' => [
            0 => 'pages'
        ],
        'webhook' => '/_git-sync',
        'branch' => 'master',
        'remote' => [
            'name' => 'origin',
            'branch' => 'master'
        ],
        'git' => [
            'author' => 'gituser',
            'name' => 'GitSync',
            'bin' => 'git'
        ],
        'logging' => false
    ]
];
