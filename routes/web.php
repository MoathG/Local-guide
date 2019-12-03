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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::resource('users', 'UserController');
//Route::resource('guides', 'GuideController');
//Route::resource('languages', 'LanguageController');
//Route::resource('reservations', 'ReservationController');
//Route::resource('places', 'PlaceController');
//Route::get('/Book/{guide_id}','GuideController@index');
Route::get('/Userinfo','UserController@index');
Route::post('/Userinfo/{user_id}','UserController@edit');
Route::patch('/userinfo/{id}','UserController@update');



Route::get('/place/{place_id}','PlaceController@index')->name('main');
Route::post('/place/{place_id}','GuideController@index')->name('filter');


Route::get('/Reservation/{guide_id}/{place}/{from}/{to}','GuideController@conformation');
Route::post('/Conformation/{guide_id}/{from}/{to}','ReservationController@create');

Route::get('/profile','ReservationController@profile');

Route::get('/Guideinfo','GuideController@login');
Route::get('/guide/{time}','ReservationController@guidetime');

