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

/*Route::get('/new', function () {
    return view('monitor-new');
});*/

Route::get('/', 'MainController@index');

Auth::routes();


Route::get('/station', 'StationController@index');

Route::get('/addStation', 'StationController@create');

Route::get('/saveStation', 'StationController@store');

Route::get('/home', 'HomeController@index')->name('home');
