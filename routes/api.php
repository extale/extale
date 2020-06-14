<?php

use Hooina\Http\Routes\Route;

return [
    Route::get('/', App\Components\Index\Controllers\IndexController::class, 'show'),
    Route::post('/authentication', App\Components\User\Controllers\AuthenticationController::class, 'authentication')
];
