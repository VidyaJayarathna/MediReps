<?php

use Illuminate\Support\Facades\Input;
use App\TestingModel;
use Illuminate\Support\Facades\DB;

//#########################################################################################################################
// page call

Route::get('/', function () {
    return view('Home');
});

Route::get('/Patient', function () {
    return view('Patient', ['saveupdate'=> 'Save']);
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

// Route::get('/Testing', function(){
//     return view('Testing');
// });

Route::get('/Testing','TestingController@search');

//Route::get('/Diagnosis', function(){
//    return view('Diagnosis');
//});
Route::get('/Diagnosis','DiagnosisController@search');

Route::get('/Login', function(){
    return view('login');
});

Route::get('/popupform', function(){
    return view('Test.popupform');
});

Route::get('/About', function(){
    return view('About');
});

Route::get('/Contact', function(){
    return view('Contact');
});

Route::get('/Services', function(){
    return view('Services');
});

Route::get('/Hospital', function(){
    return view('Hospital');
});
//Route::get('/Hospital','HospitalController@search');

//Route::get('/Specialised', function(){
//    return view('Specialised');
//});
Route::get('/Specialised','SpecialisedController@search');

Route::get('/upload', function(){
    return view('upload');
});
//#########################################################################################################################
//patient blog
Route::get('/Patientblog', function(){
    return view('PatientBlogs.PatientProfile');
});

Route::get('/PatientDiagnosis', function(){
    return view('PatientBlogs.PatientDiagnosis');
});

Route::get('/PatientDocVisit', function(){
    return view('PatientBlogs.PatientDocVisit');
});

Route::get('/PatientTestData', function(){
    return view('PatientBlogs.PatientTestData');
});

Route::get('/PatientDocVisits', function(){
    return view('PatientBlogs.PatientDocVisits');
});

Route::get('/PendingRequest', function(){
    return view('PatientBlogs.PendingRequest');
});

Route::get('/RequestForDoctor', function(){
    return view('PatientBlogs.RequestForDoctor');
});


//#########################################################################################################################
//Doctor blog
Route::get('/Doctorblog', function(){
    return view('DoctorBlogs.DoctorProfile');
});
//#########################################################################################################################

//#########################################################################################################################
//controllers
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
Route::get('/Specialised/search','SpecialisedController@search');
Route::get('/Testing/search','TestingController@search');
Route::get('/Diagnosis/search','DiagnosisController@search');
Route::post('/Patient/submit','PatientController@save');
Route::post('/Patient/Login','PatientController@login');
Route::post('/Doctor/submit','DoctorController@save');
Route::post('/Branch/submit','BranchController@save');
Route::post('/Admin/submit','AdminController@save');
Route::post('/Testing/submit','TestingController@save');
Route::post('/Diagnosis/submit','DiagnosisController@save');
Route::post('upload/store','UserController@store');

Route::post('/Patient/update','PatientController@update');
//Route::post('/Patient/submit','PatientController@update');
