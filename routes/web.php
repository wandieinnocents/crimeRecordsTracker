<?php

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

// pages routes
Route::get('about', 'FrontendController@aboutPage');
Route::get('service','FrontendController@servicePage');
Route::get('screenshot','FrontendController@screenshotPage');
Route::get('pricing','FrontendController@pricingPage');
Route::get('team','FrontendController@teamPage');
Route::get('contact','FrontendController@contactPage');

// contacts routes
Route::get('/contacts','ContactsController@index');
Route::get('/contacts/create','ContactsController@create');
Route::post('/contactsaction','ContactsController@storeDevice');
