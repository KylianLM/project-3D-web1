<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return 'a';
});

Route::auth();

Route::get('/home', 'HomeController@index');
<<<<<<< HEAD
Route::get('/game', function(){
    return view('game');
});

//Route API

Route::get('/api/me','ApiController@me');
Route::get('/api/me/image','ApiController@img');
=======
Route::get('/leaderboard', 'GameController@index');
Route::get('/upload', 'UploadController@index');
Route::post('/upload', 'UploadController@upload');
>>>>>>> dev
