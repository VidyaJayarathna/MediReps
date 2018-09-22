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

Route::post('/Patient/submit','PatientController@save');
//Route::post('/Patient/submit','PatientController@update');
