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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
//Route::get('/', 'HomeController@index');

Route::post('search', 'SearchController@searchProcess');
Route::get('search/{term}', 'SearchController@search');

Route::get('repair/create', 'RepairController@create');
Route::get('repair/{id}', 'RepairController@show');

Route::post('repair/create', 'RepairController@store');
Route::post('repair/storeremark', 'RepairController@storeremark');
Route::post('repair/changegorderno', 'RepairController@changegorderno');
Route::post('repair/changestate', 'RepairController@changestate');

Route::get('spare/create', 'PartsController@create');
Route::post('spare/store', 'PartsController@store');
Route::post('spare/update_sn', 'PartsController@updateSpareSn');
Route::post('spare/addrepair/{repair_id}', 'PartsController@addToRepair');
Route::post('spare/removefromrepair', 'PartsController@destroyFromRepair');

Route::post('kva/save', 'KvaLimitController@save');


