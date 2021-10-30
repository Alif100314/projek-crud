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

Route::get('/aku', function () {
    return view('aku');
});
Route::get('/biodata','BiodataController@index');
Route::get('/login', 'LoginController@login');
Route::post('/postlogin', 'LoginController@postlogin');
Route::get('/biodata/detail/{id}','BiodataController@show');
Route::get('/biodata/destroy/{id}','BiodataController@destroy');
Route::get('/biodata/create','BiodataController@create');
Route::post('/biodata/store','BiodataController@store');
Route::get('/biodata/edit/{id}','BiodataController@edit');
Route::put('/biodata/update/{id}','BiodataController@update');