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
    return redirect()->route('login');
});

// Auth
Route::get('login','AuthController@login')->middleware('guest')->name('login');
Route::post('login', 'AuthController@postLogin')->middleware('guest')->name('post-login');
Route::get('register','AuthController@register')->middleware('guest')->name('register');
Route::post('register', 'AuthController@postRegister')->middleware('guest')->name('post-register');
Route::get('edit-password','AuthController@editPassword')->middleware('auth')->name('edit-password');
Route::put('update-password','AuthController@updatePassword')->middleware('auth')->name('update-password');
Route::get('profile','AuthController@profile')->middleware('auth')->name('profile');
Route::get('edit-profile','AuthController@editProfile')->middleware('auth')->name('edit-profile');
Route::put('update-profile', 'AuthController@updateProfile')->middleware('auth')->name('update-profile');
Route::get('hapus-foto', 'AuthController@hapusFoto')->middleware('auth')->name('hapus-foto');

Route::get('/logout','AuthController@logout')->middleware('auth')->name('logout');

Route::get('dashboard','PageController@dashboard')->middleware('auth')->name('dashboard');
