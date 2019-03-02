<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/jon/Portfolio/user/plugins/admin-power-tools/blueprints.yaml',
    'modified' => 1546372163,
    'data' => [
        'name' => 'Admin Power Tools',
        'version' => '0.1.10',
        'description' => 'Power tools for Grav.',
        'icon' => 'plug',
        'author' => [
            'name' => 'TwelveTone LLC',
            'email' => 'info@twelvetone.tv'
        ],
        'homepage' => 'https://www.twelvetone.tv/docs/developer-tools/grav-plugins/grav-admin-power-tools',
        'xdemo' => 'http://demo.yoursite.com',
        'keywords' => 'grav, plugin, page, add, tools, admin, create, add page, report, edit',
        'bugs' => 'https://www.twelvetone.tv/docs/developer-tools/grav-plugins/grav-admin-power-tools',
        'docs' => 'https://www.twelvetone.tv/docs/developer-tools/grav-plugins/grav-admin-power-tools',
        'license' => 'MIT',
        'dependencies' => [
            0 => [
                'name' => 'grav',
                'version' => '>=1.0.0'
            ],
            1 => [
                'name' => 'admin',
                'version' => '>=1.0.0'
            ],
            2 => [
                'name' => 'core-service-manager',
                'version' => '>=1.0.7'
            ]
        ],
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin status',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'edit_page_enabled' => [
                    'type' => 'toggle',
                    'label' => 'Edit this page',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'edit_section_enabled' => [
                    'type' => 'toggle',
                    'label' => 'Edit this section',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'edit_section_syntax_enabled' => [
                    'type' => 'toggle',
                    'label' => 'Use CodeMirror if available',
                    'description' => 'Enables syntax highlighing for the section editor. The editor plugin must be installed.',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'add_page_enabled' => [
                    'type' => 'toggle',
                    'label' => 'Additional <strong>Add Page</strong> options',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'reports_enabled' => [
                    'type' => 'toggle',
                    'label' => 'Reports',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'rename_page_enabled' => [
                    'type' => 'toggle',
                    'label' => 'Rename Page',
                    'help' => 'Rename a page and modify all page-name and page-slug references.',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'move_page_enabled' => [
                    'type' => 'toggle',
                    'label' => 'Move Page',
                    'help' => 'Move a page and modify all page-route references.',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'child_reordering_enabled' => [
                    'type' => 'toggle',
                    'label' => 'Child Reordering',
                    'help' => 'Enables child reordering on the edit-page form.',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Show',
                        0 => 'Hide'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'child_reordering_immediate' => [
                    'type' => 'toggle',
                    'label' => 'Child Reordering Immediate',
                    'help' => 'Save child order without requiring a \'Save\'.',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Show',
                        0 => 'Hide'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
