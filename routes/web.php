<?php

Route::get('/', function() {
   return redirect('/tweets');
});


Route::get('/tweets', 'TweetsController@index');
Route::post('/tweets', 'TweetsController@store');
Route::delete('/tweets/{tweet}', 'TweetsController@destroy');
Route::patch('/tweets/{tweet}/like', 'TweetsController@like');
