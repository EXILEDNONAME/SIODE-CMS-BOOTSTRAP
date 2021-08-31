<?php

// CONFIGURATION - GENERAL
Route::group([
  'as' => 'dashboard.configuration.',
  'prefix' => 'dashboard/configuration',
  'namespace' => 'Backend\System',
], function(){
  Route::get('generals', 'ConfigurationController@general')->name('general');
  Route::post('general-update', 'ConfigurationController@general_update')->name('general-update');
});

// CONFIGURATION - SECTION FEATURES
Route::group([
  'as' => 'dashboard.configuration.',
  'prefix' => 'dashboard/configuration/section',
  'namespace' => 'Backend\System',
], function(){
  Route::get('features', 'ConfigurationController@feature')->name('feature');
  Route::post('feature-update', 'ConfigurationController@feature_update')->name('feature-update');
});
