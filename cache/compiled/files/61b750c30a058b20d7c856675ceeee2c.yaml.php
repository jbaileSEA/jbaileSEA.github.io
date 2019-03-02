<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/jon/Portfolio/user/plugins/tinyseo/blueprints/tinyseo.yaml',
    'modified' => 1546372141,
    'data' => [
        'form' => [
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'tinyseo' => [
                            'type' => 'tab',
                            'title' => 'SEO',
                            'fields' => [
                                'header.meta_robots' => [
                                    'type' => 'checkboxes',
                                    'label' => 'Robots',
                                    'toggleable' => true,
                                    'data-default@' => '\\Grav\\Plugin\\TinyseoPlugin::defaultRobotsMeta',
                                    'options' => [
                                        'index' => 'index',
                                        'follow' => 'follow',
                                        'noindex' => 'noindex',
                                        'nofollow' => 'nofollow',
                                        'noimageindex' => 'noimageindex'
                                    ],
                                    'use' => 'keys'
                                ],
                                'header.override_default_title' => [
                                    'type' => 'text',
                                    'size' => 'large',
                                    'autofocus' => true,
                                    'toggleable' => true,
                                    'label' => 'PLUGIN_TINYSEO.TITLE',
                                    'data-default@' => '\\Grav\\Plugin\\TinyseoPlugin::defaultMetaTitle'
                                ],
                                'header.override_default_desc' => [
                                    'type' => 'textarea',
                                    'size' => 'large',
                                    'toggleable' => true,
                                    'label' => 'Description',
                                    'data-default@' => '\\Grav\\Plugin\\TinyseoPlugin::defaultMetaDescription'
                                ],
                                'header.override_default_img' => [
                                    'type' => 'pagemediaselect',
                                    'size' => 'large',
                                    'toggleable' => true,
                                    'label' => 'Image',
                                    'data-default@' => '\\Grav\\Plugin\\TinyseoPlugin::defaultMetaImage',
                                    'preview_images' => true,
                                    'accept' => [
                                        0 => '.png',
                                        1 => '.jpg'
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
