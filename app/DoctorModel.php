<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DoctorModel extends Model
{
  public function addDoctor($data=array()){
    $id=DB::table('doctor')
          ->insert($data);
  }
  
}
