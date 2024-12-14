<?php

use App\Http\Controllers\DasboardController;

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

Auth::routes();

//Dashboard
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/teacher', 'DashboardController@teacher');
Route::get('/student', 'DashboardController@student');

//Students
// Route::get('/list', 'HomeController@list')->name('list');
Route::get('/list', 'StudentController@index')->name('list');
Route::get('/student-add/create', 'StudentController@create');
Route::post('/student-add', 'StudentController@store');
Route::get('/edit/{student}', 'StudentController@edit');
Route::put('/student/{student}', 'StudentController@update')->name('student.update');

//MyAccount
Route::get('/p', 'HomeController@MyAccount');