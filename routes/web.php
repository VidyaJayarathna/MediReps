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
    return view('Home');
});

Route::get('/Patient', function () {
    return view('Patient');
});

Route::get('/Doctor', function () {
    return view('Doctor');
});

Route::get('/Branch', function(){
    return view('Branch');
});

Route::get('/Admin', function(){
    return view('Admin');
});

Route::get('/Testing', function(){
    return view('Testing');
});

Route::post('/Patient/submit','PatientController@save');
Route::post('/Doctor/submit','DoctorController@save');
Route::post('/Branch/submit','BranchController@save');
Route::post('/Admin/submit','AdminController@save');
Route::post('/Testing/submit','TestingController@save');
//Route::post('/Patient/submit','PatientController@update');
