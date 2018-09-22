<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PatientModel extends Model
{

  public function addPatient ($data=array()) {
        $id=DB::table('patient')
            ->insert($data);
    }

  public function updatePatient ($data=array(),$id) {
    DB::table('patient')
            ->where('patientCode',$id)
            ->update($data);
}

}