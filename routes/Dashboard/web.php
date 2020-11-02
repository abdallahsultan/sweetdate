<?php
Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{

Route::prefix('dashboard')->name('dashboard.')->middleware(['auth','Admin'])->group(function() {

Route::get('/', 'HomeController@index');

Route::resource('category', 'CategoryController');


Route::resource('pcategory', 'PcategoryController');

Route::resource('blog', 'BlogController');

Route::resource('slider', 'SliderController')->except(['show', 'create']);

Route::resource('project', 'ProjectController');
Route::resource('openion', 'ProjectController');

Route::resource('about', 'AboutController')->except(['show', 'create']);

Route::resource('partner', 'PartnerController');

Route::resource('setting', 'SettingController');

Route::resource('test', 'TestController');

Route::resource('team', 'TeamController');

Route::resource('service', 'ServiceController');


Route::resource('latest', 'LatestController')->only(['index', 'update']);

Route::resource('product', 'ProductController');

Route::resource('mail', 'ContactController');

Route::resource('video', 'VideoController')->only(['index', 'update', 'show']);

Route::resource('profile', 'ProfileController');

Route::resource('seo', 'SeoController');

Route::get('colors', 'SettingController@colors')->name('colors');

Route::get('countersection', 'SectionController@countersection')->name('countersection');

Route::get('contactsection', 'SectionController@contactsection')->name('contactsection');

Route::get('editcounter/{id}','SectionController@editcounter')->name('editcounter');

Route::put('updatecounter/{id}','SectionController@updatecounter')->name('updatecounter');

Route::put('updatecontact/{id}','SectionController@updatecontact')->name('updatecontact');

Route::post('updateColor', 'SettingController@updateColor')->name('updateColor');

Route::resource('scategory', 'ScategoryController');

Route::resource('reservation', 'ReservationController');

Route::resource('tables', 'TablesController');

});

});

