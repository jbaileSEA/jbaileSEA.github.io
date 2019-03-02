<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/jon/Portfolio/user/config/site.yaml',
    'modified' => 1548624429,
    'data' => [
        'title' => '(no)mad creative',
        'default_lang' => 'en',
        'author' => [
            'name' => 'Jon Bailey',
            'email' => 'jon@nmdcreative.co'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'Jon Bailey is a Seattle-based Creative'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 250,
            'delimiter' => '==='
        ],
        'blog' => [
            'route' => '/blog'
        ],
        'share' => [
            'facebook' => true,
            'twitter' => true
        ],
        'calendar' => false,
        'sidebar_position' => 'left'
    ]
];
