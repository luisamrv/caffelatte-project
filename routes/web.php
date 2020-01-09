<?php

/*
|--------------------------------------------------------------------------
| FrontEnd
|--------------------------------------------------------------------------
*/

Route::get('/', 'FrontendController@getHomepage')->name('homepage');

Route::get('/products', 'FrontendController@getAllProducts')->name('products');

Route::get('/products/{product}', 'FrontendController@getProduct')->name('product');

Route::get('/landing-home', function () {
    return view('welcome');
});


/*
|--------------------------------------------------------------------------
| Process Forms
|--------------------------------------------------------------------------
*/
Route::post('/early-registration', 'FormsController@earlyRegistration')->name('process.early-registration');
