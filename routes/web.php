<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\UserController;
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

Route::view('/', 'frontend.home')->name('home');
Route::view('/rooms/standard', 'frontend.rooms.standard')->name('rooms.standard');
Route::view('/rooms/deluxe', 'frontend.rooms.deluxe')->name('rooms.deluxe');
Route::view('/rooms/family', 'frontend.rooms.family')->name('rooms.family');
Route::post('/sendMessage', [MessageController::class, 'store'])->name('sendMessage');

Route::prefix('administrator')->group(function () {
    Route::middleware('guest')->group(function () {
        Route::get('/login', [UserController::class, 'login'])->name('login');
        Route::post('/login', [UserController::class, 'authentication'])->name('authentication');
    });

    Route::middleware('auth')->group(function () {
        Route::get('/', [RouteController::class, 'index'])->name('root');

        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/message/{message}', [DashboardController::class, 'detail'])->name('message.detail');
        Route::post('/message/replyMessage', [DashboardController::class, 'sendEmail'])->name('message.reply');

        Route::post('/logout', [UserController::class, 'logout'])->name('logout');

        Route::get('{first}/{second}/{third}', [RouteController::class, 'thirdLevel'])->name('third');
        Route::get('{first}/{second}', [RouteController::class, 'secondLevel'])->name('second');
        Route::get('{any}', [RouteController::class, 'root'])->name('any');
    });
});
