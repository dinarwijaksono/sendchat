<?php

use App\Http\Controllers\Auth_controller;
use App\Http\Controllers\Home_controller;
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

Route::get('/', [Home_controller::class, 'index'] )->middleware('auth');

/* Auth__controoler */
    Route::get('/Auth/index', [Auth_controller::class, 'index'] )->middleware('guest')->name('login');
    Route::post('/Auth/loginProcess', [Auth_controller::class, 'loginProcess'] )->middleware('guest');

    Route::get('/Auth/create', [Auth_controller::class, 'create'] )->middleware('guest');
    Route::post('/Auth/create', [Auth_controller::class, 'store'] )->middleware('guest');
    
    Route::post('/Auth/logout', [Auth_controller::class, 'logout'] )->middleware('auth');
/* end Auth__controoler */