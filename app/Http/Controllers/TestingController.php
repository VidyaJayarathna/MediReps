<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TestingModel;

class TestingController extends Controller
{
  private $TestingModel;

  public function __construct(){
        $this->TestingModel = new TestingModel();
    }


  public function save(Request $request){
    $this->validate($request,[
      'testingCode' => 'required'
    ]);

    $data = array(
      'testingCode' => $request->input('testingCode'),
      'testingDes' => $request->input('description')
    );

    $this->TestingModel->addTesting($data);
    //session()->flash('alert-success', 'Hotel Added Successfully !');
    //return redirect(url('/admin/tour-list-hotel'));

    return redirect('/');

  }
}
