<?php

Route::get('home', 'Admin\HomeController@index');

Route::post('citizens/filter', 'Admin\CitizensController@filter')->name('citizens.filter');
Route::get('citizens/data', 'Admin\CitizensController@data')->name('citizens.data');
Route::resource('citizens', 'Admin\CitizensController');

Route::get('customers/data', 'Admin\CustomersController@data')->name('customers.data');
Route::resource('customers', 'Admin\CustomersController');
// Route::get('packages', 'Admin\PackagesController@index');
