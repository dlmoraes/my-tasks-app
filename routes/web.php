<?php

use App\Http\Controllers\CreateTaskController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskBoardController;
use Illuminate\Support\Facades\Route;

Route::get("/", HomeController::class)->name("home");

Route::get("/task/board", TaskBoardController::class)->name("task.index");
Route::get("/task/create/{service}", CreateTaskController::class)->name("task.create");
