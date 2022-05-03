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

/*Route::get('/', function () {
    return view('welcome');
});*/


Route::get('/', 'DashboardController@index');
Route::get('/edit/{id}', 'DashboardController@edit');
Route::post('/process', 'DashboardController@process');
Route::get('/delete/{id}', 'DashboardController@delete');
