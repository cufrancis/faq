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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/', 'IndexController@index');
Route::get('/show/{id}', 'IndexController@show');

Route::get('/type/{id}', 'TypeController@show');

Route::post('/answer/store/{id?}', 'AnswerController@store');

Route::get('/user/{id}', 'UserController@index');

// 提问
Route::get('/question/ask', 'QuestionController@ask');
Route::post('/question/ask', 'QuestionController@store');
