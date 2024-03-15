<?php

use App\Http\Controllers\TweetController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;

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

Route::get('/',[DashboardController::class, 'index'] )->name('dashboard');


Route::get('/tweets/{tweet}',[TweetController::class,'show'] )->name('tweets.show');

Route::put('/tweets/{tweet}',[TweetController::class,'update'] )->name('tweets.update');

Route::get('/tweets/{tweet}/edit',[TweetController::class,'edit'] )->name('tweets.edit');

Route::post('/tweets',[TweetController::class,'store'] )->name('tweets.post');

Route::delete('/tweets/{tweet}',[TweetController::class,'store'] )->name('tweets.destroy');



Route::get('/terms', function() {
    return view('terms');
});
