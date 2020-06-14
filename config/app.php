<?php

return [

    'app_name' => env('APP_NAME', 'Extale'),

    'providers_path' => env('PROVIDERS_PATH', BASE_PATH . '/config/providers.php'),

    'providers' => [
        App\Providers\RepositoryProvider::class,
        App\Providers\ServiceProvider::class,
    ],

    'factories' => [

    ],
];
