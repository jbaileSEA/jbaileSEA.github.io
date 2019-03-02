<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/jon/Portfolio/user/plugins/admin-power-tools/services/../blueprints/copy-page-custom.yaml',
    'modified' => 1546372163,
    'data' => [
        'rules' => [
            'slug' => [
                'pattern' => '[a-zA-Zа-яA-Я0-9_\\-]+',
                'min' => 1,
                'max' => 200
            ]
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'section' => [
                    'type' => 'section',
                    'title' => 'Copy Page ...'
                ],
                'title' => [
                    'type' => 'text',
                    'label' => 'PLUGIN_ADMIN.PAGE_TITLE',
                    'help' => 'PLUGIN_ADMIN.PAGE_TITLE_HELP',
                    'description' => 'Leave blank to duplicate title.',
                    'validate' => [
                        'required' => false
                    ]
                ],
                'folder' => [
                    'type' => 'text',
                    'label' => 'PLUGIN_ADMIN.FOLDER_NAME',
                    'help' => 'PLUGIN_ADMIN.FOL[DER_NAME_HELP',
                    'description' => 'Leave blank to generate from title.',
                    'validate' => [
                        'rule' => 'slug',
                        'required' => false
                    ]
                ],
                'page_like' => [
                    'type' => 'pages',
                    'label' => 'Page',
                    'help' => 'Page to copy',
                    'validate' => [
                        'required' => false
                    ]
                ]
            ]
        ]
    ]
];
