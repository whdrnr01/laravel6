<?php

Route::get('/', 'HomeController@index');
Route::get('/hello', 'HomeController@hello');
Route::get('/contact', 'HomeController@contact');

Route::get('/projects', 'ProjectController@index');
