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


Route::group(['middleware' => 'guest'], function(){
    Route::get('/','App\Http\Controllers\LoginController@login')->name('login');
    Route::post('/login','App\Http\Controllers\LoginController@post_login')->name('post_login');
    
});

Route::group(['middleware' => 'auth'], function(){
    Route::get('/dashboard','App\Http\Controllers\DashboardController@index')->name('dashboard');
    Route::get('/programs','App\Http\Controllers\ProgramController@index')->name('program.index');
    Route::get('/program/add','App\Http\Controllers\ProgramController@add')->name('program.add');
    Route::post('/program/store','App\Http\Controllers\ProgramController@store')->name('program.store');
    Route::get('/program/edit/{id}','App\Http\Controllers\ProgramController@edit')->name('program.edit');
    Route::post('/program/update/{id}','App\Http\Controllers\ProgramController@update')->name('program.update');

});
