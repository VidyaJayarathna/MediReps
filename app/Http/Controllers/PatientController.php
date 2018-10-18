<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PatientModel;

class PatientController extends Controller
{
  private $PatientModel;

  public function __construct(){
        $this->PatientModel = new PatientModel();
    }

    // save the Patient data
  public function save (Request $request) {
            $this->validate($request, [
              'pationCode' => 'required',
              'firstName' => 'required'
            ]);

            $data = array(
                'patientCode' => $request->input('pationCode'),
                'firstName' => $request->input('firstName'),
                'lastName' => $request->input('lastName'),
                'address' => $request->input('address'),
                'city' => $request->input('city'),
                'addLine3' => $request->input('district'),
                'country' => $request->input('country'),
                'dob' => $request->input('DOB'),
                'sex' => $request->input('sex'),
                'telephone1' => $request->input('telephone1'),
                'telephone2' => $request->input('telephone2'),
                'email' => $request->input('email'),
                'password' => '123'
            );

            $this->PatientModel->addPatient($data);
            //session()->flash('alert-success', 'Hotel Added Successfully !');
            //return redirect(url('/admin/tour-list-hotel'));

            return redirect('/');
      }


        // update the Patient data
  public function update (Request $request) {
                $this->validate($request, [
                  'pationCode' => 'required'
                ]);

                $data = array(
                    'patientName' => $request->input('pationName'),
                    'patientAddress' => $request->input('address'),
                    'country' => $request->input('country'),
                    'dob' => $request->input('DOB'),
                    'telephone1' => $request->input('telephone1'),
                    'telephone2' => $request->input('telephone2'),
                    'email' => $request->input('email'),
                );

                $this->PatientModel->updatePatient($data,$request->input('pationCode'));
                //session()->flash('alert-success', 'Hotel Added Successfully !');
                //return redirect(url('/admin/tour-list-hotel'));
                return redirect('/');
        }

//public function login(){
//      $myusername = "P005"
//       $mypassword = "123";
//       PatientModel-> loginPatient($myusername,$mypassword);
//}




















//    public function save1(Request $request){
//      $this->validate($request, [
//        'pationId' => 'required',
//      'pationName' => 'required'
//      ]);

      //Register the new patient
//  $patient = new Patient;
//  $patient ->patientCode = $request->input('pationId');
//  $patient ->patientName = $request->input('pationName');
//  $patient ->country = $request->input('country');
//  $patient ->dob = $request->input('DOB');
//  $patient ->telephone1 = $request->input('telephone');
//  $patient ->email = $request->input('email');

  //save patient
//  $patient->save();

  //redirect
//  return redirect('/');

  //$data =array (
  //  'patien_id' => $request->input('pationId'),
  //);

  //return Redirect::route('DiagnosisController@saveDiagnosis');

  // save the first diagnosis details
  //return \App::call('App\Http\Controllers\DiagnosisController@saveDiagnosis($request)');
  //return app(\App\Http\Controllers\DiagnosisController::class)->saveDiagnosis($request);

 // $controller = new DiagnosisController;
 // $controller->saveDiagnosis();
//    }
}
