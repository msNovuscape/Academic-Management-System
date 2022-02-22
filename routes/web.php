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

    //Program Route
    Route::get('/programs','App\Http\Controllers\ProgramController@index')->name('program.index');
    Route::get('/program/add','App\Http\Controllers\ProgramController@add')->name('program.add');
    Route::post('/program/store','App\Http\Controllers\ProgramController@store')->name('program.store');
    Route::get('/program/edit/{id}','App\Http\Controllers\ProgramController@edit')->name('program.edit');
    Route::get('/program/delete/{id}','App\Http\Controllers\ProgramController@delete')->name('program.delete');
    Route::post('/program/update/{id}','App\Http\Controllers\ProgramController@update')->name('program.update');

    //Subject Route
    Route::get('/subjects','App\Http\Controllers\SubjectController@index')->name('subject.index');
    Route::get('/subject/add','App\Http\Controllers\SubjectController@add')->name('subject.add');
    Route::post('/subject/store','App\Http\Controllers\SubjectController@store')->name('subject.store');
    Route::get('/subject/edit/{id}','App\Http\Controllers\SubjectController@edit')->name('subject.edit');
    Route::get('/subject/delete/{id}','App\Http\Controllers\SubjectController@delete')->name('subject.delete');
    Route::get('/subject/update/{id}','App\Http\Controllers\SubjectController@update')->name('subject.update');

});

