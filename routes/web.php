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

// facebook login
Route::get('/login/facebook', 'Auth\SocialAuthFacebookController@redirectToProvider');
Route::get('/login/facebook/callback', 'Auth\SocialAuthFacebookController@handleProviderCallback');

// specific landing detail eventpage
Route::get('/calendar', 'LandingController@events');
Route::post('/calendar', 'LandingController@searchEvent');

// pricing
Route::view('/pricing', 'pricing')->name('pricing');

// homepage users
Route::get('/user/home', 'HomeController@index')->name('home');

// user blips page
Route::get('/user/blips', 'BlipController@index')->name('user/blips');

// hidden route for creating blips easy
Route::get('/user/blips/create', 'BlipController@createBlip');
Route::post('/user/blips/create', 'BlipController@storeBlip');
// user blip in detail
Route::get('/user/blips/{id}', 'BlipController@detail');

// authentication routes for venues
Route::get('/venue/register', 'Auth\RegisterController@showVenueRegister')->name('venue/register');
Route::get('/venue/login', 'Auth\LoginController@showVenueLogin')->name('venue/login');

Route::post('/venue/register', 'Auth\RegisterController@handleVenueRegister');
Route::post('/venue/login', 'Auth\LoginController@handleVenueLogin');

// homepage venues
Route::get('/venue/home', 'VenueController@index')->name('venue/home');

// show all venue events
Route::get('/venue/events', 'EventController@index')->name('venue/events');

// create event as venue
Route::get('/venue/events/create', 'EventController@createEvent')->name('venue/events/create');
Route::post('/venue/events/create', 'EventController@storeEvent');

// show event details
Route::get('/venue/events/{id}', 'EventController@detail');

// upload event video
Route::get('/venue/events/{id}/upload', 'EventController@uploadVideo');
Route::post('/venue/events/{id}/upload', 'EventController@storeVideo');

Route::resource('events', 'EventController');
