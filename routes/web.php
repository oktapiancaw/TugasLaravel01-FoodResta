<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('main');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('is_admin')->group(function () {
    Route::get('admin/home', 'HomeController@adminHome')->name('admin.home');
    // Route::get('resta', 'RestaController@index')->name('resta')->withoutMiddleware('is_admin');
    Route::get('resta', 'RestaController@index')->name('resta');
    Route::get('resta/create', 'RestaController@create')->name('resta.create');
    Route::post('resta/store', 'RestaController@store')->name('resta.store');
    Route::get('resta/{resta:id}/edit', 'RestaController@edit')->name('resta.edit');
    Route::patch('resta/{resta:id}/update', 'RestaController@update')->name('resta.update');
    Route::delete('resta/{resta:id}/delete', 'RestaController@destroy')->name('resta.delete');
    Route::get('resta/export', 'RestaController@exportPdf')->name('resta.export');
    Route::post('resta/import', 'RestaController@import')->name('resta.import');
    Route::get('resta/exportExcel', 'RestaController@exportExcel')->name('resta.exportExcel');
});
