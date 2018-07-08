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

Route::get('/', "frontController@index");

//Routes for pages
Route::get('/development', "frontController@get_dev");
Route::get('/recruitment', "frontController@get_rec");
Route::get('/items', "frontController@get_ite");
Route::get('/accounttypes', "frontController@get_acctypes");

