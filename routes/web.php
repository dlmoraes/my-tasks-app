<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CreateTaskController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskBoardController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/", HomeController::class)
    ->middleware(['auth', 'verified'])->name("home");

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get("/task/board", TaskBoardController::class)->name("task.index");
    Route::get("/task/create/{service}", CreateTaskController::class)->name("task.create");

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});




require __DIR__ . '/auth.php';
