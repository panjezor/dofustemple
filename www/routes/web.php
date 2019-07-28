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
Route::group(['middleware' => 'auth'], function () {

    Route::get('/register', function () {
        return view('auth.register');
    });
    Route::get('/almanax/list', '\App\Http\Controllers\Tools\AlmanaxController@list');
    Route::get('/almanax/{date}', '\App\Http\Controllers\Tools\AlmanaxController@show');
    Route::post('/almanax/add', '\App\Http\Controllers\Tools\AlmanaxController@add');


    Route::get('/logout', function () {
        Auth::logout();
        return redirect('/');
    });
    Route::get('/home', 'HomeController@index');
    Route::get('/', 'HomeController@index')->name('home');


    Route::get('/monsters', 'MonsterController@input');
    Route::post('/monsters/add', 'MonsterController@addmob');
    Route::get('/monsters/arch', 'MonsterController@showArch');
    Route::get('/monsters/collection', 'MonsterController@showAll');
    Route::get('/monsters/collection/add', 'MonsterController@add');
    Route::get('/monsters/collection/subtract', 'MonsterController@subtract');
});


Auth::routes();
