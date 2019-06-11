<?php


Route::get('/', 'HomeController@index');

Route::get('/movies','MovieController@index');

Route::get('/movies/create', 'MovieController@create');

Route::post('/movies/create', 'MovieController@store');




Route::get('/movies/{id}', 'MovieController@show');



// Route::get ('/actors','');
// Route::get ('/genres', '');
// Route::get ('/backoffice', '');

