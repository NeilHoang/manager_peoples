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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('managers')->group(function () {
    Route::get('/','ManagerPeopleController@index')->name('managers.index');
    Route::get('create','ManagerPeopleController@create')->name('managers.create');
    Route::post('create','ManagerPeopleController@store')->name('managers.store');
    Route::get('{id}/edit','ManagerPeopleController@edit')->name('managers.edit');
    Route::post('{id}/update','ManagerPeopleController@update')->name('managers.update');
    Route::get('delete/{id}','ManagerPeopleController@destroy')->name('managers.delete');
    Route::get('search','ManagerPeopleController@search')->name('managers.search');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
