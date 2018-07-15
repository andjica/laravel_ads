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
Route::get('/test', function()
{
  dd(auth()->user());
});
Route::get('/', "frontController@index");

//Routes for pages
Route::get('/development', "frontController@get_dev");
Route::get('/recruitment', "frontController@get_rec");
Route::get('/items', "frontController@get_ite");
Route::get('/accounttypes', "frontController@get_acctypes");


//Ruta za dohvatanje jednog oglasa - nova strana
Route::get('/ads', "frontController@get_ad");


//Rute kada se korisnik uloguje
Route::get('/user_ads', "userController@index");
Route::get('/user_profile', "userController@get_user");
Route::get('/make_ads', "userController@insert_ads");



Auth::routes();

Route::post('/login', 'Auth\LoginController@login');

Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', "adminController@index");
Route::get('/admin_ads', "adminController@get_ads");
Route::get('/admin_user', "adminController@get_user");