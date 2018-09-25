<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DiagnosisModel extends Model
{
  public function addDiagnosis($data=array()){
    $id=DB::table('diagnosis')
          ->insert($data);
  }
}
