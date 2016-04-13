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


Route::get('/game', function(){
    return view('game');
});

Route::get('/thunderjet', function(){
    return view('/histoire/thunderjet');
});

Route::get('/ouragan', function(){
    return view('/histoire/ouragan');
});

Route::get('/misteriv', function(){
    return view('/histoire/misteriv');
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
