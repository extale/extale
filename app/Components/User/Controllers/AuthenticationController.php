<?php

namespace App\Components\User\Controllers;

use App\Components\User\Controllers\Requests\AuthenticationRequest;
use Hooina\Http\Controller\Controller;
use Hooina\Http\Responses\Response;

class AuthenticationController extends Controller
{
    public function authentication(AuthenticationRequest $request): Response
    {
        return response([
            'status' => 'success',
            'method' => 'authentication',
            'request' => $request->getParameters()
        ]);
    }
}
