<?php

return [

    'app_name' => env('APP_NAME', 'Lucida'),

    'providers_path' => env('PROVIDERS_PATH', BASE_PATH . '/config/providers.php'),

    'providers' => [
        App\Providers\RepositoryProvider::class,
        App\Providers\ServiceProvider::class,
    ],

    'builders' => [
        'application' => Hooina\Core\Builders\ApplicationBuilder::class,
        'kernel' => Hooina\Http\Builders\KernelBuilder::class,
        'request' => Hooina\Http\Requests\Builders\RequestBuilder::class,
        'request_receiver' => Hooina\Http\Requests\Builders\RequestReceiverBuilder::class,
        'route' => Hooina\Http\Routes\Builders\RouteBuilder::class,
        'route_receiver' => Hooina\Http\Routes\Builders\RouteReceiverBuilder::class
    ],

    'aliases' => [

    ],
];
