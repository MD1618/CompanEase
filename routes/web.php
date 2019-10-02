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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');

//companies
Route::get('/companies', 'CompaniesController@index')->name('companies');

Route::get('/companies/create', 'CompaniesController@create')->name('companies.create');
Route::post('/companies/store', 'CompaniesController@store')->name('companies.store');

Route::get('/companies/edit/{id}', 'CompaniesController@edit')->name('companies.edit');
Route::patch('/companies/update/{id}', 'CompaniesController@update')->name('companies.update');

Route::post('/companies/delete/{id}', 'CompaniesController@destroy')->name('companies.delete');


