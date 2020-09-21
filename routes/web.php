<?php


Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{

Route::get('/', 'HomeController@index')->name('home');

Route::get('blogs', 'HomeController@blogs')->name('blogs');

Route::get('events', 'HomeController@events')->name('events');

Route::get('projects', 'HomeController@projects')->name('projects');

Route::get('projectdetails/{id}', 'HomeController@projectdetails')->name('projectdetails');

Route::get('services', 'HomeController@services')->name('services');

Route::get('blogdetails/{id}', 'HomeController@blogdetails')->name('blogdetails');

Route::get('eventdetails/{id}', 'HomeController@eventdetails')->name('eventdetails');

Route::get('contact', function () {

    return view('contact');

})->name('contact');

Route::get('project/{id}', 'HomeController@projectcat')->name('project');

Route::get('product', 'HomeController@products')->name('products');

Route::get('reserve', 'HomeController@reserve')->name('reserve');

Route::get('product/{id}', 'HomeController@product')->name('product');

Route::get('service/{id}', 'HomeController@service')->name('service');

Route::post('contactform',  'HomeController@contactform')->name('contactform');

Route::get('about', 'HomeController@about')->name('about');

Auth::routes(['register' => false]);

Route::get('showservices/{id}', 'HomeController@showservices')->name('showservices');

Route::post('makereservation', 'HomeController@makereservation')->name('makereservation');

Route::get('openion', 'HomeController@openion')->name('openion');

Route::post('saveopenion', 'HomeController@saveopenion')->name('saveopenion');
//place
Route::get('place', 'HomeController@place')->name('place');






});
