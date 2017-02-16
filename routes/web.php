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
Route::get('/students/delete/{id}', 'StudentsController@delete_students');
Route::post('/students/add', 'StudentsController@tambah');
Route::post('/students/edit', 'StudentsController@edit_post');

// Instructrs
Route::get('/instructors', 'InstructorsController@index');
Route::get('/instructors/add', function () {
    return view('instructors.add');
});
Route::post('/instructors/add', 'InstructorsController@tambah');
Route::get('/instructors/edit/{id}', 'InstructorsController@edit_instructors');
Route::post('/instructors/edit', 'InstructorsController@edit_post');
Route::get('/instructors/delete/{id}', 'InstructorsController@delete_instructors');


// Couse
Route::get('/course', 'CourseController@index');
Route::get('/course/add', function () {
    return view('course.add');
});
Route::post('/course/add', 'CourseController@tambah');
Route::get('/course/edit/{id}', 'CourseController@edit_course');
Route::post('/course/edit', 'CourseController@edit_post');
Route::get('/course/delete/{id}', 'CourseController@delete_course');
