<?php

use GuzzleHttp\Middleware;
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
    return view('welcome');
});
Route::get('user/register','RegistrationController@create')->name('usersRegister');
Route::post('user/new-registration','RegistrationController@store')->name('doRegister');
Route::get('login-interface','LoginController@login')->name('userLogin');
Route::post('user/login','LoginController@dologin')->name('doLogin');
Route::get('/home', function () {
    return view('home');
})->name('home')->middleware('auth');
Route::any('logout','LoginController@logout')->name('logout');