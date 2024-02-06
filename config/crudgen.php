<?php

return
[
	'views_style_directory'=> 'default-theme',
	'separate_style_according_to_actions' =>
    [
        'index'=>
        [
            'extends'=>'layouts.app',
            'section'=>'content'
        ],
        'create'=>
        [
            'extends'=>'layouts.app',
            'section'=>'content'
        ],
        'edit'=>
        [
            'extends'=>'layouts.app',
            'section'=>'content'
        ],
        'show'=>
        [
            'extends'=>'layouts.app',
            'section'=>'content'
        ],
    ],
    'paths' =>
    [
        'service' =>
        [
            'path' => app_path('Services'),
            'namespace' => 'App\Services'
        ]
    ]

];
