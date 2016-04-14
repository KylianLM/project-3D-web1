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
    return view('index');
});



Route::get('/game', 'GameController@game');
Route::get('/game1', 'GameController@game1');
Route::get('/game2', 'GameController@game2');
Route::get('/game3', 'GameController@game3');
Route::get('/game4', 'GameController@game4');
Route::get('/game5', 'GameController@game5');



Route::get('/profil', function(){
    return view('profil');
});

Route::get('/thunderjet', function(){
    return view('/histoire/thunderjet');
});

Route::get('/ouragan', function(){
    return view('/histoire/ouragan');
});

Route::get('/mistereiv', function(){
    return view('/histoire/mistereiv');
});

Route::get('/magister', function(){
    return view('/histoire/magister');
});

Route::get('/alphajet', function(){
    return view('/histoire/alphajet');
});

Route::auth();
Route::get('/home', 'HomeController@index');
Route::get('/leaderboard', 'GameController@index');
Route::get('/upload', 'UploadController@index');
Route::post('/upload', 'UploadController@upload');


//Route API

Route::get('/api/me','ApiController@me');
Route::get('/api/me/image','ApiController@img');

Route::post('/api/score', 'ApiController@setScore');
