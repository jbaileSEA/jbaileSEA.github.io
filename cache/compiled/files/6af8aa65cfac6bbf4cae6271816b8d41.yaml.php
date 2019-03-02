<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/jon/Portfolio/user/config/plugins/email.yaml',
    'modified' => 1546373377,
    'data' => [
        'enabled' => true,
        'from' => 'contact@nmdcreative.co',
        'to' => 'jon@nmdcreative.co',
        'mailer' => [
            'engine' => 'smtp',
            'smtp' => [
                'server' => 'localhost',
                'port' => 25,
                'encryption' => 'none'
            ],
            'sendmail' => [
                'bin' => '/usr/sbin/sendmail'
            ]
        ],
        'content_type' => 'text/html',
        'debug' => false,
        'cc' => 'jon.bailey22@iCloud.com'
    ]
];
