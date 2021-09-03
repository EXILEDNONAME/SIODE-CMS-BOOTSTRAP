<?php

// SECTION - ABOUT
Route::group([
  'as' => 'system.main.t1.about.',
  'prefix' => 'dashboard/sections/about',
  'namespace' => 'Backend\Main\T1',
], function(){
  Route::get('/', 'AboutController@index')->name('index');
  Route::post('store', 'AboutController@store')->name('store');
  Route::post('update', 'AboutController@update')->name('update');
});

// SECTION - COUNT
Route::group([
  'as' => 'system.main.t1.count.',
  'prefix' => 'dashboard/sections/count',
  'namespace' => 'Backend\Main\T1',
], function(){
  Route::get('/', 'CountController@index')->name('index');
  Route::post('store', 'CountController@store')->name('store');
  Route::post('update', 'CountController@update')->name('update');
});

// SECTION - TEAM
Route::group([
  'as' => 'system.main.t1.team.',
  'prefix' => 'dashboard/sections/team',
  'namespace' => 'Backend\Main\T1',
], function(){
  Route::get('status-done/{id}', 'TeamController@status_done')->name('status-done');
  Route::get('status-pending/{id}', 'TeamController@status_pending')->name('status-pending');
  Route::get('enable/{id}', 'TeamController@enable')->name('enable');
  Route::get('disable/{id}', 'TeamController@disable')->name('disable');
  Route::get('status/{id}/{slug}', 'TeamController@status')->name('status');
  Route::get('delete/{id}', 'TeamController@delete')->name('delete');
  Route::get('deleteall', 'TeamController@deleteall')->name('deleteall');
  Route::resource('/', 'TeamController')->parameters(['' => 'id']);
});
