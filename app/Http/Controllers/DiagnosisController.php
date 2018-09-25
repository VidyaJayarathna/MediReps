<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DiagnosisModel;

class DiagnosisController extends Controller
{
  private $DiagnosisModel;

  public function __construct(){
        $this->DiagnosisModel = new DiagnosisModel();
    }


  public function save(Request $request){
    $this->validate($request,[
      'diagnosisCode' => 'required'
    ]);

    $data = array(
      'diagnosisCode' => $request->input('diagnosisCode'),
      'diagnosisName' => $request->input('diagnosisName'),
      'diagnosisDes' => $request->input('description')
    );

    $this->DiagnosisModel->addDiagnosis($data);
    return redirect('/');

  }
}
