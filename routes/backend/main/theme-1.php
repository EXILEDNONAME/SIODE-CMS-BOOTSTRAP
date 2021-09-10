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

// SECTION - CLIENTS
Route::group([
  'as' => 'system.main.t1.client.',
  'prefix' => 'dashboard/sections/client',
  'namespace' => 'Backend\Main\T1',
], function(){
  Route::get('status-done/{id}', 'ClientController@status_done')->name('status-done');
  Route::get('status-pending/{id}', 'ClientController@status_pending')->name('status-pending');
  Route::get('enable/{id}', 'ClientController@enable')->name('enable');
  Route::get('disable/{id}', 'ClientController@disable')->name('disable');
  Route::get('status/{id}/{slug}', 'ClientController@status')->name('status');
  Route::get('delete/{id}', 'ClientController@delete')->name('delete');
  Route::get('deleteall', 'ClientController@deleteall')->name('deleteall');
  Route::resource('/', 'ClientController')->parameters(['' => 'id']);
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

// SECTION - PRICINGS
Route::group([
  'as' => 'system.main.t1.pricing.',
  'prefix' => 'dashboard/sections/pricing',
  'namespace' => 'Backend\Main\T1',
], function(){
  Route::get('status-done/{id}', 'PricingController@status_done')->name('status-done');
  Route::get('status-pending/{id}', 'PricingController@status_pending')->name('status-pending');
  Route::get('enable/{id}', 'PricingController@enable')->name('enable');
  Route::get('disable/{id}', 'PricingController@disable')->name('disable');
  Route::get('status/{id}/{slug}', 'PricingController@status')->name('status');
  Route::get('delete/{id}', 'PricingController@delete')->name('delete');
  Route::get('deleteall', 'PricingController@deleteall')->name('deleteall');
  Route::resource('/', 'PricingController')->parameters(['' => 'id']);
});

// SECTION - SERVICES
Route::group([
  'as' => 'system.main.t1.service.',
  'prefix' => 'dashboard/sections/service',
  'namespace' => 'Backend\Main\T1',
], function(){
  Route::get('status-done/{id}', 'ServiceController@status_done')->name('status-done');
  Route::get('status-pending/{id}', 'ServiceController@status_pending')->name('status-pending');
  Route::get('enable/{id}', 'ServiceController@enable')->name('enable');
  Route::get('disable/{id}', 'ServiceController@disable')->name('disable');
  Route::get('status/{id}/{slug}', 'ServiceController@status')->name('status');
  Route::get('delete/{id}', 'ServiceController@delete')->name('delete');
  Route::get('deleteall', 'ServiceController@deleteall')->name('deleteall');
  Route::resource('/', 'ServiceController')->parameters(['' => 'id']);
});

// SECTION - SKILL
Route::group([
  'as' => 'system.main.t1.skill.',
  'prefix' => 'dashboard/sections/skill',
  'namespace' => 'Backend\Main\T1',
], function(){
  Route::get('/', 'SkillController@index')->name('index');
  Route::post('store', 'SkillController@store')->name('store');
  Route::post('update', 'SkillController@update')->name('update');
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

// SECTION - TESTIMONIALS
Route::group([
  'as' => 'system.main.t1.testimonial.',
  'prefix' => 'dashboard/sections/testimonial',
  'namespace' => 'Backend\Main\T1',
], function(){
  Route::get('status-done/{id}', 'TestimonialController@status_done')->name('status-done');
  Route::get('status-pending/{id}', 'TestimonialController@status_pending')->name('status-pending');
  Route::get('enable/{id}', 'TestimonialController@enable')->name('enable');
  Route::get('disable/{id}', 'TestimonialController@disable')->name('disable');
  Route::get('status/{id}/{slug}', 'TestimonialController@status')->name('status');
  Route::get('delete/{id}', 'TestimonialController@delete')->name('delete');
  Route::get('deleteall', 'TestimonialController@deleteall')->name('deleteall');
  Route::resource('/', 'TestimonialController')->parameters(['' => 'id']);
});
