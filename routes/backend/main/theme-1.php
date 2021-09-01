<?php

// SECTION - ABOUT
Route::group([
  'as' => 'dashboard.section.',
  'prefix' => 'dashboard/sections',
  'namespace' => 'Backend\Main\Section',
], function(){
  Route::get('about', 'T1Controller@about')->name('about');
  Route::post('about-update', 'T1Controller@about_update')->name('about-update');
});
