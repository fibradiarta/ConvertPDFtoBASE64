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

Route::get('/', 'UploadController@Index');
Route::post('/', 'UploadController@Upload');
Route::get('/list', 'UploadController@List');
Route::get('/list/{id}', 'UploadController@Download');
