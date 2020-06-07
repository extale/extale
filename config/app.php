<?php

return [

    'app_name' => env('APP_NAME', 'Lucida'),

    'providers_path' => env('PROVIDERS_PATH', BASE_PATH . '/config/providers.php'),

    'providers' => [
        App\Providers\RepositoryProvider::class,
        App\Providers\ServiceProvider::class,
    ],

    'builders' => [
        'application' => Ex\Lucida\Core\Builders\ApplicationBuilder::class,
        'kernel' => Ex\Lucida\Core\Http\Builders\KernelBuilder::class,
        'request' => Ex\Lucida\Core\Http\Requests\Builders\RequestBuilder::class,
        'request_receiver' => Ex\Lucida\Core\Http\Requests\Builders\RequestReceiverBuilder::class,
        'route' => Ex\Lucida\Core\Http\Routes\Builders\RouteBuilder::class,
        'route_receiver' => Ex\Lucida\Core\Http\Routes\Builders\RouteReceiverBuilder::class
    ],

    'aliases' => [

    ],
];
