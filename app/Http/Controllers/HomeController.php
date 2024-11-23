<?php

namespace App\Http\Controllers;

use App\Services\ServiceService;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function __invoke()
    {
        return view("home");
    }
}
