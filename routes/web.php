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

Route::get('/login', 'AuthController@login')->name('login');
Route::post('/login', 'AuthController@submit_login');
Route::get('/logout', 'AuthController@logout')->name('logout');
Route::get('/maintenance', 'AuthController@maintenance')->name('maintenance');
Route::get('/version_log', 'MainController@version_log');
Route::get('/not_active', 'AuthController@not_active')->name('not_active');
Route::get('/', 'MainController@dashboard')->name('portal');
Route::prefix('skeleton')->group(function () {
    Route::get('/dashboard', 'MainController@dashboard_skeleton')->name('dashboard_skeleton');
    Route::get('/create', 'MainController@create_skeleton')->name('create_skeleton');
    Route::post('/create', 'MainController@submit_create_skeleton')->name('submit_create_skeleton');
    Route::get('/list', 'MainController@list_skeleton')->name('list_skeleton');
    Route::get('/outstanding', 'MainController@outstanding_skeleton')->name('outstanding_skeleton');
});
