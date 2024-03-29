<?php

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

Route::view('/', 'home-page');
// Route::view('/home', 'home-page')->name('home');
// Route::view('/about', 'about-page')->name('about');


Route::view('dashboard', 'app.dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'app.profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';
