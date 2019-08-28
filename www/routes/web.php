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

use App\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Auth;

Route::get('/register', function () {
    return view('auth.register');
});
Route::group(['middleware' => 'auth'], function () {

    Route::get('/register', function () {
        return view('auth.register');
    });
    Route::get('/logout', function () {
        Auth::logout();
        return redirect('/');
    });
    Route::get('/home', 'HomeController@index');
    Route::get('/', 'HomeController@index')->name('home');

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
            Route::get('/admin', 'MonsterController@showAllLists');
            Route::get('/', 'MonsterController@showMyLists');

            Route::prefix('/{list}')->group(function () {

                Route::get('/', 'MonsterController@showList');
                Route::get('/add', 'MonsterController@add');
                Route::get('/subtract', 'MonsterController@subtract');
            });
        });
    });

});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
