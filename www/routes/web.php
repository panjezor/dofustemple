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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Orangehill\Iseed\Iseed;

Auth::routes();


Route::get('/seed/{table}', function ($table) {
    $seed = new Iseed();
    $seed->generateSeed($table);
    return 'true';
});

Route::group(['middleware' => 'auth'], function () {

    Route::get('/', 'HomeController@index')->name('home');
    Route::prefix('/drop')->group(function () {
        Route::get('/', 'DropController@index');
        Route::get('/addteam', 'DropController@index');
    });
    Route::get('/to-do', 'HomeController@toDoList')->name('to-do');

    Route::post('/profile', 'HomeController@profile')->name('profile'); // TODO: needs doing


    Route::prefix('/almanax')->group(function () {
        Route::get('/list', 'AlmanaxController@list');
        Route::get('/{date}', 'AlmanaxController@show');
        Route::post('/add', 'AlmanaxController@add');
    });

    Route::prefix('/monsters')->group(function () {
        Route::get('', 'MonsterController@input');
        Route::post('/add', 'MonsterController@addmob');
        Route::get('/arch', 'MonsterController@showArch');

        Route::prefix('/lists')->group(function () {
            Route::get('/', 'MonsterController@showLists');

            Route::prefix('/{list}')->group(function () {

                Route::get('/', 'MonsterController@showList');
                Route::get('/add/{monster}', 'MonsterController@add');
                Route::get('/subtract/{monster}', 'MonsterController@subtract');
            });
        });
    });

});

