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

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/students', 'StudentsController@index');
Route::get('/students/edit/{id}', 'StudentsController@edit_students');
Route::get('/students/add', function () {
    return view('students/add');
});
Route::post('/students/add', 'StudentsController@tambah');
Route::post('/students/edit', 'StudentsController@edit_post');
