<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use App\Http\Middleware\checkIsLogged;
use App\Http\Middleware\checkIsNotLogged;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('main');
// });



// Route::get('/main/{value}',[MainController::class, 'index']);
// Route::get('/page2/{value}',[MainController::class, 'page2']);
// Route::get('/page3/{value}',[MainController::class, 'page3']);


//auth routes

Route::middleware([checkIsNotLogged::class])->group(function () {

    Route::get('/login', [AuthController::class, 'login']);
    Route::post('/loginSubmit', [AuthController::class, 'loginSubmit']);
});



Route::middleware([checkIsLogged::class])->group(function () {

    Route::get('/', [MainController::class, 'index'])->name('home');
    Route::get('/newNote', [MainController::class, 'newNote'])->name('new');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});
