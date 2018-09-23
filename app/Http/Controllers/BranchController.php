<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BranchModel;

class BranchController extends Controller
{
    private $BranchModel;

    public function __construct(){
          $this->BranchModel = new BranchModel();
      }


    public function save(Request $request){
      $this->validate($request,[
        'branchCode' => 'required',
        'branchName' => 'required'
      ]);

      $data = array(
        'branchCode' => $request->input('branchCode'),
        'branchName' => $request->input('branchName'),
        'branchDes' => $request->input('description')
      );

      $this->BranchModel->addBranch($data);
      //session()->flash('alert-success', 'Hotel Added Successfully !');
      //return redirect(url('/admin/tour-list-hotel'));

      return redirect('/');

    }

}
