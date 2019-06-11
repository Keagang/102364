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
    return view('102364.welcome');
});
Route::get('/fees', 'FeesController@create')->name('fees');
Route::get('/fees/{id}','FeesController@show')->name('fees.show');
Route::get('/total-fees', 'FeesController@index')->name('total-fees');
Route::post('/fees','FeesController@store')->name('fees.store');
Route::get('/student', function (){
	return view('102364.student');
})->name('students');
Route::post('/student','StudentController@store')->name('register.student');
// Route::resource('/fees','FeesController');
// Route::resource('/student','StudentController');
