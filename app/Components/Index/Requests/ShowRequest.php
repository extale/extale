<?php

namespace App\Components\Index\Requests;

use Hooina\Http\Requests\Request;

class ShowRequest extends Request
{
    protected array $rules = [
        'message' => 'required, min:5, max:10'
    ];
}
