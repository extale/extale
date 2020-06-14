<?php

namespace App\Components\Index\Controllers;

use Hooina\Http\Controller\Controller;

class IndexController extends Controller
{
    public function show()
    {
        return response('Welcome to The Extale framework!');
    }
}
