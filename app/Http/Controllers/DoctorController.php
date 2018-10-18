<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DoctorModel;

class DoctorController extends Controller
{
  private $DoctorModel;

  public function __construct(){
        $this->DoctorModel = new DoctorModel();
    }

  public function save(Request $request){
    $this->validate($request,[
      'doctorCode' => 'required',
      'doctorName' => 'required'
    ]);

    $data = array(
      'doctorCode' => $request->input('doctorCode'),
      'doctorName' => $request->input('doctorName'),
      'address' => $request->input('address'),
      'country' => $request->input('country'),
      'specialisted' => $request->input('specialisted'),
      'sex' => $request->input('sex'),
      'dob' => $request->input('DOB'),
      'telephone1' => $request->input('telephone1'),
      'telephone2' => $request->input('telephone2'),
      'email' => $request->input('email')
    );

    $this->DoctorModel->addDoctor($data);
    //session()->flash('alert-success', 'Hotel Added Successfully !');
    //return redirect(url('/admin/tour-list-hotel'));

    return redirect('/');

  }
}
