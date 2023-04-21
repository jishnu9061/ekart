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

Route::any('login','LoginController@login')->name('login');
Route::get('home','LoginController@home')->name('home');
Route::any('do-login','LoginController@index')->name('do.login');
Route::get('about','LoginController@about')->name('about');
