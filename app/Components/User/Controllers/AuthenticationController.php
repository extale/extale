<?php

namespace App\Components\User\Controllers;

use Hooina\Http\Requests\Request;
use Hooina\Http\Responses\Response;

class AuthenticationController
{
    public function authentication(Request $request): Response
    {
        return response([
            'status' => 'success',
            'method' => 'authentication'
        ]);
    }

    public function show(Request $request): Response
    {
        return response([
            'status' => 'success',
            'method' => 'show'
        ]);
    }
}
