<?php

return [
    'name' => 'LaravelPWA Humm',
    'manifest' => [
        'name' => env('APP_NAME', 'My PWA App'),
        'short_name' => 'PWA',
        'start_url' => '/',
        'background_color' => 'red',
        'theme_color' => '#000000',
        'display' => 'standalone',
        'orientation'=> 'any',
        'status_bar'=> 'black',
        'icons' => [
            'admin_user_icon' => [
                'path' => '/images/icons/admin_user_icon.svg',
                'sizes' => '22x24',
                'purpose' => 'any'
            ],
            'arrow_left' => [
                'path' => '/images/icons/arrow_left.svg',
                'sizes' => '13x21',
                'purpose' => 'any'
            ],
            'calendar' => [
                'path' => '/images/icons/calendar.svg',
                'sizes' => '24x25',
                'purpose' => 'any'
            ],
            'docsign' => [
                'path' => '/images/icons/docsign.svg',
                'sizes' => '112x53',
                'purpose' => 'any'
            ],
            'envelope' => [
                'path' => '/images/icons/envelope.svg',
                'sizes' => '24x20',
                'purpose' => 'any'
            ],
            'export' => [
                'path' => '/images/icons/export.svg',
                'sizes' => '13x13',
                'purpose' => 'any'
            ],
            'i_icon' => [
                'path' => '/images/icons/i_icon.svg',
                'sizes' => '20x20',
                'purpose' => 'any'
            ],

            'icon_status' => [
                'path' => '/images/icons/icon_status.svg',
                'sizes' => '40x46',
                'purpose' => 'any'
            ],

            'log-out' => [
                'path' => '/images/icons/log-out.png',
                'sizes' => '64x64',
                'purpose' => 'any'
            ],

            'logo' => [
                'path' => '/images/icons/logo.png',
                'sizes' => '50x45',
                'purpose' => 'any'
            ],

            'logo_svg' => [
                'path' => '/images/icons/logo.svg',
                'sizes' => '238x201',
                'purpose' => 'any'
            ],

            'print' => [
                'path' => '/images/icons/print.svg',
                'sizes' => '15x15',
                'purpose' => 'any'
            ],
            'phone' => [
                'path' => '/images/icons/phone.svg',
                'sizes' => '27x28',
                'purpose' => 'any'
            ],

            'Profile' => [
                'path' => '/images/icons/Profile.svg',
                'sizes' => '23x25',
                'purpose' => 'any'
            ],

            'zoom' => [
                'path' => '/images/icons/zoom.svg',
                'sizes' => '30x19',
                'purpose' => 'any'
            ],
        ],
        'splash' => [
            '640x1136' => '/images/icons/splash-640x1136.png',
            '750x1334' => '/images/icons/splash-750x1334.png',
            '828x1792' => '/images/icons/splash-828x1792.png',
            '1125x2436' => '/images/icons/splash-1125x2436.png',
            '1242x2208' => '/images/icons/splash-1242x2208.png',
            '1242x2688' => '/images/icons/splash-1242x2688.png',
            '1536x2048' => '/images/icons/splash-1536x2048.png',
            '1668x2224' => '/images/icons/splash-1668x2224.png',
            '1668x2388' => '/images/icons/splash-1668x2388.png',
            '2048x2732' => '/images/icons/splash-2048x2732.png',
        ],
        'shortcuts' => [
            [
                'name' => 'Shortcut Link 1',
                'description' => 'Shortcut Link 1 Description',
                'url' => '/shortcutlink1',
                'icons' => [
                    "src" => "/images/icons/icon-72x72.png",
                    "purpose" => "any"
                ]
            ],
            [
                'name' => 'Shortcut Link 2',
                'description' => 'Shortcut Link 2 Description',
                'url' => '/shortcutlink2'
            ]
        ],
        'custom' => []
    ]
];
