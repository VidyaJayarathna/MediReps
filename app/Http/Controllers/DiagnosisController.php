<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DiagnosisModel;
use Illuminate\Support\Facades\Input;

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

    public function search(){

        $id = Input::get('sratchItem');
        //if($id != ""){
        $testing= $this->DiagnosisModel->searchDiagnosis($id);
        return view('Diagnosis',
            ['details'=> $testing
            ]);

    }
}
