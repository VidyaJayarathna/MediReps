<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TestingModel extends Model
{
  public function addTesting($data=array()){
    $id=DB::table('testing')
          ->insert($data);
  }
}
