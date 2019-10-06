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
Route::get('/companies/{id}', 'CompaniesController@show')->name('companies.show');

Route::get('/companies/edit/{id}', 'CompaniesController@edit')->name('companies.edit');
Route::patch('/companies/update/{id}', 'CompaniesController@update')->name('companies.update');

Route::post('/companies/delete/{id}', 'CompaniesController@destroy')->name('companies.delete');

//employees
Route::get('/employees', 'EmployeesController@index')->name('employees');

Route::get('/employees/create', 'EmployeesController@create')->name('employees.create');
Route::post('/employees/store', 'EmployeesController@store')->name('employees.store');
Route::post('/employees/qualify', 'EmployeesController@qualify')->name('employees.qualify');

Route::get('/employees/edit/{id}', 'EmployeesController@edit')->name('employees.edit');
Route::patch('/employees/update/{id}', 'EmployeesController@update')->name('employees.update');

Route::get('/employees/{id}', 'EmployeesController@show')->name('employees.show');

Route::post('/employees/delete/{id}', 'EmployeesController@destroy')->name('employees.delete');

//Qualifications
Route::get('/qualifications', 'QualificationsController@index')->name('qualifications');

Route::get('/qualifications/create', 'QualificationsController@create')->name('qualifications.create');
Route::get('/qualifications/edit/{id}', 'QualificationsController@edit')->name('qualifications.edit');
Route::post('/qualifications/store', 'QualificationsController@store')->name('qualifications.store');
Route::patch('/qualifications/update/{id}', 'QualificationsController@update')->name('qualifications.update');
Route::post('/qualifications/delete/{id}', 'QualificationsController@destroy')->name('qualifications.delete');

Route::get('/qualifications/{id}', 'QualificationsController@show')->name('qualifications.show');
