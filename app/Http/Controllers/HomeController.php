<?php

namespace App\Http\Controllers;

use App\Services\ServiceService;

class HomeController extends Controller
{

    public function __invoke()
    {
        return view("home");
    }
}
