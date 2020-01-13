<?php

/*
|--------------------------------------------------------------------------
| FrontEnd
|--------------------------------------------------------------------------
*/

Route::get('/', 'FrontendController@getHomepage')->name('homepage');

Route::get('/products', 'FrontendController@getAllProducts')->name('products');

Route::get('/products/{product}', ' @getProduct')->name('product');

Route::get('/landing-home', function () {
    return view('welcome');
});


Route::get('/includes/modal-product-price/{product}', 'FrontendController@getModalProductPrice')->name('modal-product-price');

/*
|--------------------------------------------------------------------------
| Process Forms
|--------------------------------------------------------------------------
*/

Route::post('/early-registration', 'FormsController@earlyRegistration')->name('process.early-registration');

Route::post('/process/product-price/{product}', 'FormsController@productPrice')->name('process.product-price');
