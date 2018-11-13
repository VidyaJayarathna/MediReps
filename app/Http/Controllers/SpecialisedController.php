<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SpecialisedModel;
use Illuminate\Support\Facades\Input;

class SpecialisedController extends Controller
{
    private $SpecialisedModel;

    public function __construct(){
        $this->SpecialisedModel = new SpecialisedModel();
    }

    public function search(){

        $id = Input::get('sratchItem');
        //if($id != ""){
        $testing= $this->SpecialisedModel->searchSpecialisedin($id);
        return view('Specialised',
            ['details'=> $testing
            ]);

    }
}
