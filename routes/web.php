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

Route::group(['middleware'=>'auth'], function (){
    Route::get('chat', 'Chat\ChatController@index')->name('chat');

    Route::get('chat/messages', 'Chat\ChatController@messages')->name('messages');
    Route::post('chat/message', 'Chat\ChatController@store')->name('store');

    Route::get('/meu-perfil', 'User\UserController@profile')->name('profile');
    Route::post('/meu-perfil', 'User\UserController@profileUpdate')->name('profileUpdate');
});



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
