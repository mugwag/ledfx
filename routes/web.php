<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('ledfx');
});

Route::get('login', function () {
    return view('login');
});

Route::post('auth/login', 'Auth\LoginController@login');

Route::resource('products', 'productsController');
Route::resource('categories', 'categoriesController');

Route::resource('site', 'siteController');

Route::post('/site/homepage_image_update',[
    'as' => 'site.homepage_image_update',
    'uses' => 'siteController@homepage_image_update'
]);
