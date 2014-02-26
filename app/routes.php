<?php

// Home pages
Route::get('/', ["as" => "site.home", "uses" => "Acme\Controllers\SiteController@home"]);
Route::get('about', ["as" => "site.about", "uses" => "Acme\Controllers\SiteController@about"]);
Route::get('contact', ["as" => "site.contact", "uses" => "Acme\Controllers\SiteController@contact"]);

// Login  and Register routes
Route::get('session/create', ["as" => "session.create", "uses" => "Acme\Controllers\SessionController@create"]);
Route::get('logout', ["as" => "session.logout", "uses" => "Acme\Controllers\SessionController@logout"]);
Route::get('session/new', ["as" => "session.new", "uses" => "Acme\Controllers\SessionController@createNew"]);

// Post routes
Route::post('session/create', "Acme\Controllers\SessionController@attempt");
Route::post('session/new', "Acme\Controllers\SessionController@attemptNew");

Route::group(['before' => 'auth'], function(){
  Route::get('complete_profile', ["as" => "app.complete", "uses" => "Acme\Controllers\AppController@complete"]);
  Route::get('home', ["as" => "app.home", "uses" => "Acme\Controllers\AppController@home"]);
});

// Restrict api routes in browser
// Route::get('api/{any?}', function(){
//   if(!Request::ajax()){
//     App::abort(404);
//   }
// })->where('any', '.*');