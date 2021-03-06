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

// Route::get('/', function () {
//     return view('home');
// });
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::resource('/users','UserController');

Route::resource('/branch','BranchController');

Route::resource('/position','PositionController');

Route::resource('/department','DepartmentController');

Route::resource('/employee','EmployeeController');

Route::resource('/salary','SalaryController');

