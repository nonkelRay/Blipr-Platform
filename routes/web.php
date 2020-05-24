<?php

use Illuminate\Support\Facades\Auth;
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

// landingpage
Route::get('/', function () {
    return view('landing');
});

// authentication routes
Auth::routes();

// homepage
Route::get('/home', 'HomeController@index')->name('home');

// facebook login
Route::get('login/facebook', 'Auth\SocialAuthFacebookController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\SocialAuthFacebookController@handleProviderCallback');

// subscription page
Route::get('/subscription', function () {
    return view('subscription');
});
