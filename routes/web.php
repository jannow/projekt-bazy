<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware'=>['web']], function(){
Route::get('/', [
	'uses' => 'LoginController@getHome',
	'as'=>'home'
]);
Route::get('/login', [
	'uses' => 'LoginController@getLogin',
	'as'=>'logowanie'
]);
Route::post('/postLogin',[
	'uses' => 'LoginController@postLogin',
	'as'=>'login'
]);
Route::get('/management', [
	'uses' => 'LoginController@getZarzadzaj',
	'as' => 'management'
]);
Route::get('/map', [
	'uses' => 'LoginController@getMap',
	'as' => 'map'
]);

Route::get('/cennik', [
	'uses' => 'LoginController@getPrice',
	'as' => 'cennik'
]);
});
Route::resource('kierownik','KierownikController');
Route::resource('zarejestrujkierownika','ZarejestrujKierownikaController');
Route::resource('bilety','BiletyController');
Route::resource('kierowca','KierowcaController');
Route::resource('autobusy','AutobusyController');
Route::resource('zarejestrujkierowce','ZarejestrujKierowceController');
