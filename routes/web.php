<?php

use Illuminate\Support\Facades\Route;

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
Route::group(['middleware' => ['prevent-back-history']], function(){

    Route::get('/', function(){ return redirect()->route('admin.login'); });

    Route::prefix('/admin')->name('admin.')->namespace('Admin')->group(function(){
        Route::group(['middleware' => ['guest:admin']], function () {
            Route::get('/', 'AuthController@login')->name('login');
            Route::post('signin', 'AuthController@signin')->name('signin');
        });

        Route::group(['middleware' => ['auth:admin']], function () {
            Route::get('logout', 'AuthController@logout')->name('logout');

            Route::get('dashboard', 'DashboardController@index')->name('dashboard');

            /** users */
            Route::any('users', 'UsersController@index')->name('users');
            Route::post('users/store', 'UsersController@store')->name('users.store');
        });
    });

    Route::any('/{slug?}', function(){ return redirect()->route('admin.login');});
});