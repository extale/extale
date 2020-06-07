<?php

namespace App\Components\User\Controllers;

use Ex\Lucida\Core\Http\Requests\Request;
use Ex\Lucida\Core\Http\Responses\Response;

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
