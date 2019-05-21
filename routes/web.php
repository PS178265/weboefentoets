<?php

// Route::get('/', function () {
//     return view('welcome');
//     return 'hello world';
// });

Route::get('/', 'rondeTijdController@getIndex');
Route::post('/', 'rondeTijdController@postIndex');