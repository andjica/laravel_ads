<?php

Route::post('/send', 'MailController@send');

Route::get('/', "frontController@index");

//Routes for pages
Route::get('/development', "frontController@get_dev");
Route::get('/recruitment', "frontController@get_rec");
Route::get('/items', "frontController@get_ite");
Route::get('/houses', "frontController@get_house");
Route::get('/cars', "frontController@get_car");


Route::get('/company', "frontController@get_com");

Route::post('/category', 'AdController@category');
Route::get('/sub-cat/{id}', 'AdController@sub');


Route::get('/accounttypes', "frontController@get_acctypes");


//Ruta za dohvatanje jednog oglasa - nova strana
Route::get('/ad/{ad}', "frontController@get_ad");


//Rute kada se korisnik uloguje
Route::get('/user_ads', "userController@index");
Route::get('/user_profile', "userController@get_user");
Route::get('/make_ads', "userController@insert_ads");
Route::get('/delete', "userController@destroy");
Route::get('/edit', 'userController@showAdEdit');
Route::post('/edit', 'AdController@edit');



Auth::routes();

Route::post('/login', 'Auth\LoginController@login');

Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', "adminController@index");
Route::get('/admin-payment', 'adminController@payment');

Route::get('/admin-delete/{id}', 'adminController@destroy');

Route::post('/insert', 'AdController@store'); //Ruta za dodavanje novog oglasa kao korisnik


//PAYPAL RUTE
Route::post('/upgrade-pro', 'PaymentController@pro'); // PLACANJE ZA PRO
Route::post('/upgrade-super', 'PaymentController@superPro'); // PLACANJE ZA SUPER-PRO

Route::get('status-pro', 'PaymentController@getPaymentStatusPro'); //PROVERAVA STATUS PLACANJA
Route::get('status-super', 'PaymentController@getPaymentStatusSuper'); //PROVERAVA STATUS PLACANJA
