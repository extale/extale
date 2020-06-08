<?php

use Hooina\Http\Routes\Route;

return [
    Route::post('/authentication', App\Components\User\Controllers\AuthenticationController::class, 'authentication'),
    Route::get('/authentication', App\Components\User\Controllers\AuthenticationController::class, 'show')
];
