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

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin', 'App\Http\Controllers\AdminController@index')->name('admin');
Route::get('admin/user', 'App\Http\Controllers\AdminController@user')->name('user');
Route::get('admin/sports', 'App\Http\Controllers\AdminController@sports')->name('sport_admin');

Route::get('/dashboard', function () {
    return view('dashboard');
});
