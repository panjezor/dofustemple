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

Auth::routes();

// TODO: sort all the routes to use the facade, not the strings.

Route::get('/', 'HomeController@index')->name('home')->middleware('locale');
Route::middleware(['auth', 'locale'])->group(function () {
    Route::prefix('/admin')->group(function () {
        Route::get('/', 'AdminController@index');// needs doing
        Route::get('live', 'AdminController@live');// needs doing
        Route::prefix('/malina')->group(function () {
            Route::get('/', 'MalinaController@index');// needs doing
            Route::get('/drafts', 'DraftController@index');// needs doing
        });

    });

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
        Route::post('/add', 'MonsterController@addmob');
        Route::get('/arch', 'MonsterController@showArch');

        Route::prefix('/lists')->group(function () {
            Route::get('/', 'MonsterController@showLists')->name('all-lists');

            Route::prefix('/{list}')->group(function () {

                Route::get('/', 'MonsterController@showList');
                Route::get('/add/{monster}', 'MonsterController@add')->name('add-monster');
                Route::get('/subtract/{monster}', 'MonsterController@subtract')->name('subtract-monster');
            });
        });
    });


});
