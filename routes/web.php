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

Route::get('/', 'HomeController@index')->name('home');

Route::prefix('kegiatan')->group(function () {

    Route::get('/', 'KegiatanController@index');
    Route::get('create/{id}','KegiatanController@create');
    Route::get('print/{id}/{barcode}','KegiatanController@print');
    Route::post('save','KegiatanController@save');
    Route::post('delete','KegiatanController@delete');
    Route::get('datatable','KegiatanController@datatable');
    Route::post('filter-bidang','KegiatanController@filter_bidang');
    Route::post('filter-kegiatan','KegiatanController@filter_kegiatan');
});            
Route::prefix('user')->group(function () {
    Route::post('gantipassword','UserController@gantipassword');
});
Auth::routes();
