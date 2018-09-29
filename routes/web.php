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

Route::get('/', function () {
    return view('indice');
})->name('indice');

Route::get('/log', 'LoginController@show')->name('log');

Route::get('/forum','TopicController@index')->name('forum');

Route::get('/forum/new_entry', 'TopicController@create')->name('forum.newentry')->middleware('user');

Route::post('/log/save', 'LoginController@store')->name('user.registrar');
Route::post('/log/verify', 'LoginController@authenticate')->name('user.login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/forum/new_entry/save', 'TopicController@store')->name('topic.store');

Route::get('/logout', 'LoginController@logout')->name('logout');

Route::get('/users/{username}','UserController@show')->name('users');

//Route::get('/log/verify_r', 'LoginController@authenticateRedirect')->name()

Route::get('/profile', function(){
    return view('profile');
});

Route::get('/logr', 'LoginController@redirect')->name('log2');

Route::get('/forum/{category}','TopicController@show')->name('forum.cat');

Route::get('/users{username}/config', 'UserController@update')->name('profile.config');