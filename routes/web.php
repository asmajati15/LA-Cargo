<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('user/home');
});

Route::get('/shipping-rate', function () {
    return view('user/shipping');
});

Route::get('/services', function () {
    return view('user/services');
});

Route::get('/about', function () {
    return view('user/about');
});

Route::get('/information', function () {
    return view('user/information');
});

Route::get('/test', function ()
{
    return view('user/test');
});
