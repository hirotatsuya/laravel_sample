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

// デフォルト
Route::get('/', function () {
    return view('welcome');
});

// テストコード
Route::get('/hello', function () {
    return '<html><body><h1>Hello World</h1><p>this is sample page.</p></body></html>';
});
Route::get('/hello_message', function () {
    return view('hello',['message' => 'Hello!']);
});
Route::get('/hello_controller', 'HelloController@getIndex');
Route::get('/input', 'InputController@getIndex');
Route::post('/input', 'InputController@postIndex');
Route::get('/query', 'InputController@getQuery');
Route::get('/gotohello', 'InputController@gotoHello');
Route::get('/user', 'UsersController@getIndex');
Route::post('/user', 'UsersController@insert');
Route::get('/show_users', 'UsersController@selectUsers');

Route::get('/login', 'LoginController@getIndex');
Route::post('/login', 'LoginController@postIndex');