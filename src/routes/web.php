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

Route::redirect('/', '/ukr');

Route::group(['prefix' => '{language}'], function () {

    Route::get('/', function () {
        //    App::setLocale('ukr');

        return view('welcome');
    });

    Route::resource('ministries', 'MinistryController');

    Auth::routes();
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');


});
