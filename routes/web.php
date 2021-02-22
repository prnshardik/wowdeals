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
                Route::post('users/edit', 'UsersController@edit')->name('users.edit');
                Route::patch('users/update', 'UsersController@update')->name('users.update');
                Route::post('users/change-status', 'UsersController@change_status')->name('users.change.status');
            /** users */

            /** states */
                Route::any('states', 'StatesController@index')->name('states');
                Route::post('states/store', 'StatesController@store')->name('states.store');
                Route::post('states/edit', 'StatesController@edit')->name('states.edit');
                Route::patch('states/update', 'StatesController@update')->name('states.update');
                Route::post('states/change-status', 'StatesController@change_status')->name('states.change.status');
            /** states */

            /** cities */
                Route::any('cities', 'CitiesController@index')->name('cities');
                Route::post('cities/store', 'CitiesController@store')->name('cities.store');
                Route::post('cities/edit', 'CitiesController@edit')->name('cities.edit');
                Route::patch('cities/update', 'CitiesController@update')->name('cities.update');
                Route::post('cities/change-status', 'CitiesController@change_status')->name('cities.change.status');
            /** cities */
        });
    });

    Route::any('/{slug?}', function(){ return redirect()->route('admin.login');});
});
