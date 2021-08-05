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

Route::get('/attendance', 'attendanceController@index');
Route::get('/student', 'studentController@index');
Route::get('/teacher', 'teacherController@index');
Route::get('/subject', 'subjectController@index');
Route::get('/topics', 'topicsController@index');
Route::get('/evaluations', 'evaluationsController@index');
