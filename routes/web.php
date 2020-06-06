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

// DEFENITIONS:
// GET -> show
// POST -> store
// DELETE -> destroy
// UPDATE/PATCH -> update

// landingpage
Route::get('/', 'LandingController@index');

// authentication routes for user
Auth::routes();

// homepage users
Route::get('/home', 'HomeController@index')->name('home');

// facebook login
Route::get('/login/facebook', 'Auth\SocialAuthFacebookController@redirectToProvider');
Route::get('/login/facebook/callback', 'Auth\SocialAuthFacebookController@handleProviderCallback');

// subscription page
Route::get('/subscription', function () {
    return view('user.subscription');
});

// authentication routes for venues
Route::get('/venue/register', 'Auth\RegisterController@showVenueRegister')->name('venue/register');
Route::get('/venue/login', 'Auth\LoginController@showVenueLogin')->name('venue/login');

Route::post('/venue/register', 'Auth\RegisterController@handleVenueRegister');
Route::post('/venue/login', 'Auth\LoginController@handleVenueLogin');

// homepage venues
Route::get('/venue/home', 'VenueController@index')->name('venue/home');

// show all venue events
Route::get('/venue/events', 'EventController@index');
// create event as venue
Route::get('/venue/events/create', 'EventController@createEvent');
Route::post('/venue/events/create', 'EventController@storeEvent');
// show event details
Route::get('/venue/events/{id}', 'EventController@details');

Route::resource('events', 'EventController');
