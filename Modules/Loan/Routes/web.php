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

Route::prefix('loan')->group(function() {
    Route::get('/', 'LoanController@index')->name('loans');
    Route::get('/apply', 'LoanController@create')->name('apply-loan');
    Route::post('/apply', 'LoanController@store')->name('store.loan');


    Route::get('/loanDetails/{id}', 'LoanStatusChangeController@index')->name('details.loan');
    Route::put('/statuschange/{id}', 'LoanStatusChangeController@update')->name('status.change');


});
