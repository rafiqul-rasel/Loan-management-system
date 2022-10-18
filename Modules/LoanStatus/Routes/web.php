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

Route::prefix('loanstatus')->group(function() {
    Route::get('/', 'LoanStatusController@index')->name("loanstatus");
    Route::get('/create', 'LoanStatusController@create')->name('loanstatus.create');
    Route::post('/store', 'LoanStatusController@store')->name('loanstatus.store');
    Route::get('/edit/{id}', 'LoanStatusController@edit')->name('loanstatus.edit');
    Route::get('/show/{id}', 'LoanStatusController@show')->name('loanstatus.show');
    Route::put('/update/{id}', 'LoanStatusController@update')->name('loanstatus.update');
    Route::get('/delete/{id}', 'LoanStatusController@destroy')->name('loanstatus.delete');
});
