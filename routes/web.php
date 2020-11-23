<?php



Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{
    Route::get('generate_key','HomeController@generate_key');
    Route::get('submit_reservation','HomeController@submit_reservation');
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

Route::get('menu', 'HomeController@products')->name('menu');
//reserve
Route::get('reserve', 'HomeController@reserve')->name('reserve');
Route::get('gettabledate', 'HomeController@get_table_date')->name('gettabledate');
Route::get('reserve/indoor', 'HomeController@reserveindoor')->name('reserve/indoor');
Route::get('reserve/outdoor', 'HomeController@reserveoutdoor')->name('reserve/outdoor');
Route::post('makereservationindoor', 'HomeController@makereservation')->name('makereservationindoor');
Route::post('makereservationoutdoor', 'HomeController@makereservation')->name('makereservationoutdoor');
Route::get('submit_payment/{name}/{phone}/{date}/{persons}/{time}', 'HomeController@submit_payment')->name('submit_payment');


Route::get('product/{id}', 'HomeController@product')->name('product');

Route::get('service/{id}', 'HomeController@service')->name('service');

Route::post('contactform',  'HomeController@contactform')->name('contactform');

Route::get('ourstory', 'HomeController@about')->name('ourstory');

Auth::routes(['register' => false]);

Route::get('showservices/{id}', 'HomeController@showservices')->name('showservices');



Route::get('openion', 'HomeController@openion')->name('openion');

Route::post('saveopenion', 'HomeController@saveopenion')->name('saveopenion');
//place
Route::get('place', 'HomeController@place')->name('place');
//menu
Route::get('catalog', 'HomeController@menu')->name('catalog');

Route::get('showcpsite/{name}/{id}', 'HomeController@showcpsite')->name('showcpsite');




Route::post('api/test_rehamibrahem_post', 'HomeController@setCookie');
Route::get('api/test_rehamibrahem_get', 'HomeController@getCookie');


});
