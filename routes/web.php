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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/users', 'UsersController@index')->name('users');

Route::resource('/users', 'UsersController');
Route::resource('/departments', 'DepartmentsController');

Route::get('/deleteAll', 'DepartmentsController@deleteAll');

Route::resource('/roles', 'RolesController');

Route::resource('/joborders', 'JobOrdersController');

Route::resource('/statuses', 'StatusesController');

Route::resource('/companies', 'CompaniesController');
Route::resource('/customers', 'CustomersController');
// Route::resource('/employees', 'EmployeeController');
