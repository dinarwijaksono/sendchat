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

    Route::get('/Auth/create', [Auth_controller::class, 'create'] )->middleware('guest')->name('login');
/* end Auth__controoler */