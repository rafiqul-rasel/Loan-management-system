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

Route::prefix('loancategories')->group(function() {
    Route::get('/', 'LoanCategoriesController@index')->name("loan.categories");
    Route::get('/create', 'LoanCategoriesController@create')->name('loan.categories.create');
    Route::post('/store', 'LoanCategoriesController@store')->name('loan.categories.store');
    Route::get('/edit/{id}', 'LoanCategoriesController@edit')->name('loan.categories.edit');
    Route::get('/show/{id}', 'LoanCategoriesController@show')->name('loan.categories.show');
    Route::put('/update/{id}', 'LoanCategoriesController@update')->name('loan.categories.update');
    Route::get('/delete/{id}', 'LoanCategoriesController@destroy')->name('loan.categories.delete');
});
