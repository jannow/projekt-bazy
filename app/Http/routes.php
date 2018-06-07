<?php

Route::group(['middleware' => ['web']], function (){
  Route::get('/', function () {
    return view('welcome');
  });
  Route::get('/dashboard', [
    'uses' => 'UserController@getDashboard',
    'as' => 'dashboard'
  ]);
});
