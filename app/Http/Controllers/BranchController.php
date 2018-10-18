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
        'branchAddress' => $request->input('branchAddress'),
        'city' => $request->input('city'),
        'district' => $request->input('district'),
        'country' => $request->input('country'),
        'branchDes' => $request->input('description'),
        'telephone1' => $request->input('telephone1'),
        'telephone2' => $request->input('telephone2'),
        'email' => $request->input('email')
      );

      $this->BranchModel->addBranch($data);
      //session()->flash('alert-success', 'Hotel Added Successfully !');
      //return redirect(url('/admin/tour-list-hotel'));

      return redirect('/');

    }

}
