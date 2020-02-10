<?php

Route::get('/', 'HomeController@index');
Route::get('/hello', 'HomeController@hello');
Route::get('/contact', 'HomeController@contact');

Route::get('/projects', 'ProjectController@index');

Route::get('/tasks', 'TaskController@index');
Route::get('/tasks/create', 'TaskController@create');
Route::get('/tasks/{task}', 'TaskController@show');
Route::get('/tasks/{task}/edit', 'TaskController@edit');
Route::delete('/tasks/{task}', 'TaskController@destroy');
Route::post('/tasks', 'TaskController@store');
Route::put('/tasks/{task}', 'TaskController@update');
