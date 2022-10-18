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

Route::prefix('mysecret')->group(function() {
    Route::get('/', 'MySecretController@index')->name('mysecret');
    Route::get('/generate', 'MySecretController@generate')->name('secgen');
});
