<?php

use Illuminate\Support\Facades\Input;
use App\TestingModel;
use Illuminate\Support\Facades\DB;

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

Route::get('/Diagnosis', function(){
    return view('Diagnosis');
});

Route::get('/Patientblog', function(){
    return view('PatientBlogs.PatientLayout.Patientapp');
});

//Route::get('/search', function(){
//    if($q != ""){
//        $testing = DB::table('testing')
//                    ->where('testingCode', 'LIKE','%' . $q . '%')
//                    ->orWhere('testingDes', 'LIKE', '%' . $q . '%')
//                    ->get();
//        if(count($testing) > 0){
//          return view('Testing')->withDetails($testing)->withQuery($q);
//        //->with('details',$testing)
//      }return view('Testing')->withMessage("No Testing Found");
//
//    }
//    return "no data found";
//});

Route::get('/Testing/search','TestingController@search');

Route::post('/Patient/submit','PatientController@save');
Route::post('/Doctor/submit','DoctorController@save');
Route::post('/Branch/submit','BranchController@save');
Route::post('/Admin/submit','AdminController@save');
Route::post('/Testing/submit','TestingController@save');
Route::post('/Diagnosis/submit','DiagnosisController@save');


//Route::post('/Patient/submit','PatientController@update');
