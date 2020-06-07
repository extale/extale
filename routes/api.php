<?php

use Ex\Lucida\Core\Http\Routes\Route;

return [
    Route::post('/authentication', App\Components\User\Controllers\AuthenticationController::class, 'authentication'),
    Route::get('/authentication', App\Components\User\Controllers\AuthenticationController::class, 'show')
];
