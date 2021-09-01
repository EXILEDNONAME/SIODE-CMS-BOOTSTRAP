<?php

// THEMES
Route::group([
  'as' => 'main.themes.',
  'prefix' => 'dashboard/themes',
  'namespace' => 'Backend\Main',
], function(){
  Route::get('status-done/{id}', 'ThemeController@status_done')->name('status-done');
  Route::get('status-pending/{id}', 'ThemeController@status_pending')->name('status-pending');
  Route::get('enable/{id}', 'ThemeController@enable')->name('enable');
  Route::get('disable/{id}', 'ThemeController@disable')->name('disable');
  Route::get('status/{id}/{slug}', 'ThemeController@status')->name('status');
  Route::get('delete/{id}', 'ThemeController@delete')->name('delete');
  Route::get('deleteall', 'ThemeController@deleteall')->name('deleteall');
  Route::resource('/', 'ThemeController')->parameters(['' => 'id']);
});

// CONFIGURATION - THEMES
Route::group([
  'as' => 'main.configuration.themes.',
  'prefix' => 'dashboard/configuration/themes',
  'namespace' => 'Backend\Main',
], function(){
  Route::get('status-done/{id}', 'ConfigurationThemeController@status_done')->name('status-done');
  Route::get('status-pending/{id}', 'ConfigurationThemeController@status_pending')->name('status-pending');
  Route::get('enable/{id}', 'ConfigurationThemeController@enable')->name('enable');
  Route::get('disable/{id}', 'ConfigurationThemeController@disable')->name('disable');
  Route::get('status/{id}/{slug}', 'ConfigurationThemeController@status')->name('status');
  Route::get('delete/{id}', 'ConfigurationThemeController@delete')->name('delete');
  Route::get('deleteall', 'ConfigurationThemeController@deleteall')->name('deleteall');
  Route::resource('/', 'ConfigurationThemeController')->parameters(['' => 'id']);
});
