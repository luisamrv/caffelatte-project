<?php

/*
|--------------------------------------------------------------------------
| FrontEnd
|--------------------------------------------------------------------------
*/

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/', 'FrontendController@getHomepage')->name('homepage');

Route::get('/products', 'FrontendController@getAllProducts')->name('products');

Route::get('/events/brochura', 'FrontendController@getBrochura')->name('brochura');

Route::get('/events/{event}', 'FrontendController@getEventLanding')->name('event-landing');

Route::get('/products/{product}', 'FrontendController@getProduct')->name('product');

Route::get('/landing-home', function () {
    return view('welcome');
});

Route::get('terms-and-conditions', 'FrontendController@getTermsConditions')->name('terms-and-conditions');


Route::get('/includes/modal-product-price/{product}', 'FrontendController@getModalProductPrice')->name('modal-product-price');

Route::get('/includes/modal-download-brochure/', 'FrontendController@getModalBrochure')->name('modal-download-brochure');

Route::get('/includes/modal-download-hr-images/{slug}', 'FrontendController@getModalHRImages')->name('modal-download-hr-images');

Route::get('/includes/modal-download-ebook/', 'FrontendController@getModalEbook')->name('modal-download-ebook');

Route::get('/includes/modal-download-pricelist/', 'FrontendController@getModalPricelist')->name('modal-download-pricelist');

Route::get('/includes/modal-book-a-meeting/', 'FrontendController@getModalBookMeeting')->name('modal-book-a-meeting');

Route::get('/includes/modal-ebook/{ebook}', 'FrontendController@getModalEbook')->name('modal-ebook');

Route::get('/includes/modal-download-press-release/{slug}', 'FrontendController@getModalPressRelease')->name('modal-download-press-release');

/*
|--------------------------------------------------------------------------
| Products
|--------------------------------------------------------------------------
*/ 

Route::get('/product/marco', 'FrontendController@getProductMarco');

/*
|--------------------------------------------------------------------------
| Process Forms
|--------------------------------------------------------------------------
*/

Route::post('/early-registration', 'FormsController@earlyRegistration')->name('process.early-registration');

Route::post('/process/product-price/{product}', 'FormsController@productPrice')->name('process.product-price');

Route::post('/process/download-brochure/', 'FormsController@downloadBrochure')->name('process.download-brochure');

Route::post('/process/modal-download-hr-images/', 'FormsController@downloadHRImages')->name('process.download-hr-images');

Route::post('/process/download-pricelist/', 'FormsController@downloadPricelist')->name('process.download-pricelist');

Route::post('/process/book-a-meeting/', 'FormsController@bookMeeting')->name('process.book-a-meeting');

Route::post('/process/download-ebook/', 'FormsController@downloadEbook')->name('process.download-ebook');

Route::post('/process/download-press-release/', 'FormsController@downloadPressRelease')->name('process.download-press-release');

Route::post('/process/subscribe', 'FormsController@subscribe')->name('process.subscribe');


/*
|--------------------------------------------------------------------------
| Thank You Pages
|--------------------------------------------------------------------------
*/

Route::get('/actions/get-price', 'FrontendController@ThankYouPageGetprice')->name('actions.get-price');

Route::get('/actions/download-ebook', 'FrontendController@ThankYouPageDownloadEbook')->name('actions.download-ebook');

Route::get('/actions/download-press-release', 'FrontendController@ThankYouPagePressRelease')->name('actions.download-press-release');

Route::get('/actions/download-content', 'FrontendController@ThankYouPageDownloads')->name('actions.download-content');

