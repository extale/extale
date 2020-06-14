<?php

namespace App\Components\User\Controllers\Requests;

use Hooina\Http\Requests\Request;

class AuthenticationRequest extends Request
{
    protected array $rules = [
        'email' => 'required',
        'password' => 'required, string, min:6, max:30'
    ];
}
