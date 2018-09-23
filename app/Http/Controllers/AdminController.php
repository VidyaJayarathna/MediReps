<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AdminModel;

class AdminController extends Controller
{
  private $AdminModel;

  public function __construct(){
        $this->AdminModel = new AdminModel();
    }


  public function save(Request $request){
    $this->validate($request,[
      'adminCode' => 'required',
      'branchid' => 'required'
    ]);

    $data = array(
      'adminCode' => $request->input('adminCode'),
      'branchid' => $request->input('branchid'),
      'adminName' => $request->input('adminName'),
      'password' => $request->input('password')
    );

    $this->AdminModel->addAdmin($data);
    //session()->flash('alert-success', 'Hotel Added Successfully !');
    //return redirect(url('/admin/tour-list-hotel'));

    return redirect('/');

  }
}
