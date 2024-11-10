<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskBoardController extends Controller
{

    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        // Simulating authentication for demonstration purposes
        Auth::loginUsingId(1);

        return view('tasks.index');
    }
}
