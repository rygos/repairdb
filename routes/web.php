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
Route::get('/all', 'HomeController@index_all');
Route::get('/hh', 'HomeController@index_active_hh');
//Route::get('/', 'HomeController@index');

Route::post('search', 'SearchController@searchProcess');
Route::get('search/{term}', 'SearchController@search');

Route::get('repair/create', 'RepairController@create');
Route::get('repair/{id}', 'RepairController@show');

Route::post('repair/create', 'RepairController@store');
Route::post('repair/storeremark', 'RepairController@storeremark');
Route::post('repair/changegorderno', 'RepairController@changegorderno');
Route::post('repair/changestate', 'RepairController@changestate');
Route::post('repair/update_so', 'RepairController@update_so');
Route::post('repair/upload-kva', 'RepairController@upload_kva');
Route::get('repair/kva_download/{file_id}', 'RepairController@download_kva')->name('kva_download');
Route::get('repair/kva_delete/{file_id}', 'RepairController@delete_kva');

Route::get('spare', 'PartsController@index');
Route::get('spare/create', 'PartsController@create');
Route::post('spare/store', 'PartsController@store');
Route::post('spare/update_sn', 'PartsController@updateSpareSn');
//Route::get('spare/wa', 'PartsController@show_wa');
Route::get('spare/wa', 'PartsController@show_wa');
Route::post('spare/wa', 'PartsController@store_wa');
Route::get('spare/we', 'PartsController@show_we');
Route::post('spare/we', 'PartsController@store_we');
Route::post('spare/addrepair/{repair_id}', 'PartsController@addToRepair');
Route::post('spare/removefromrepair', 'PartsController@destroyFromRepair');
Route::get('spare/{id}', 'PartsController@show');

Route::post('kva/save', 'KvaLimitController@save');

Route::get('stats', 'StatsController@index');

Route::post('/data/checkeeee', 'ModelController@checkeeee');

Route::get('liveview', 'LiveViewController@index');
Route::get('/data/liveview', 'LiveViewController@getData');

Route::get('overtime', 'OvertimeController@index');
Route::post('overtime', 'OvertimeController@store');
Route::post('overtime/delete', 'OvertimeController@delete');
Route::get('overtime/{id}/send', 'OvertimeController@send');

Route::get('models', 'ModelController@index');
Route::get('models/{id}', 'ModelController@show');

Route::get('scrape/create_pack', 'ScrapeController@create_pack');
Route::get('scrape/export/{pack}', 'ScrapeController@export');
Route::get('scrape/{pack?}', 'ScrapeController@index');
Route::post('scrape/store', 'ScrapeController@store');

Route::get('xcharge/export/{export_type}', 'XChargeController@export');
Route::get('xcharge/reactivate/{id}', 'XChargeController@reactivate');
Route::get('xcharge/charged_undone{id}', 'XChargeController@charged_undone');
Route::get('xcharge/{search_start?}/{search_end?}/{customer?}', 'XChargeController@index');

Route::get('report/garantie', 'ReportController@garantie');
Route::get('report/xcharge', 'ReportController@xcharge');


//Route::get('faktura', 'FakturaController@index');
Route::get('faktura/{search_start?}/{search_end?}/{customer?}', 'FakturaController@index');

//RepairFiles Routes
Route::post('repairfile/upload', 'RepairFileController@store');
Route::get('repairfile/download/{id}', 'RepairFileController@download');
Route::get('repairfile/delete/{id}', 'RepairFileController@delete');

Route::get('admin', 'AdminController@index');


//Maintenance Routes
Route::get('maint/link', function () {
   Artisan::call('storage:link');
});
