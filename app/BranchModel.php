<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BranchModel extends Model
{
  public function addBranch($data=array()){
    $id=DB::table('branch')
          ->insert($data);
  }
  
}
