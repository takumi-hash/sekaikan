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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']], function () {
//    Route::resource('users', 'UsersController', ['only' => ['index', 'show']]);
Route::get('/takumi', function () {return view('members.takumi');});
Route::get('/saaya', function () {return view('members.saaya');});
Route::get('/erika', function () {return view('members.erika');});
Route::get('/manato', function () {return view('members.manato.welcome');});
Route::get('/maho', function () {return view('members.maho');});
Route::get('/jun', function () {return view('members.jun');});
});
