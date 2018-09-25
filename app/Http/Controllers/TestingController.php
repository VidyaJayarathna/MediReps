<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TestingModel;
use Illuminate\Support\Facades\Input;

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
    return redirect('/');

  }

  public function search(){
    $id = Input::get('sratchItem');
    if($id != ""){
      $testing= $this->TestingModel->searchTesting($id);
      if(count($testing) > 0){
       return view('Testing')->withDetails($testing)->withQuery($id);
         //->with('details',$testing)
      }return view('Testing')->withMessage("No Testing Found");
    }
    return "no data found";
  }
}
