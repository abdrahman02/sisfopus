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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('backend.dashboard.dashboard');
});
Route::get('/home', function () {
    return view('frontend.pages.landings');
});
Route::get('/tentang', function () {
    return view('frontend.pages.about');
});

Route::get('/bantuan', function () {
    return view('frontend.pages.bantuan');
});

Route::get('/katalog', function () {
    return view('frontend.pages.katalog');
});

Route::get('/login', function () {
    return view('auth.login');
});
