<?php

return [
    'twitter' => env('TWITTER_SN'),
    'operator' => env('OPERATOR_NAME', env('TWITTER_SN')),
    'icon' => env('ICON_URL'),

    // Top Page
    'top' => [
        // Hero Image
        'image' => env('TOP_IMAGE_URL'),
        'caption' => env('TOP_IMAGE_CAPTION'),
        // Top Tagline
        'tagline' => env('TOP_TAGLINE', env('APP_NAME')),
        'tagline-sub' => env('TOP_TAGLINE_SUB', env('APP_NAME_EN')),
    ],
];
