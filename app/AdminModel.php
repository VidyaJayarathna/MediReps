<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AdminModel extends Model
{
  public function addAdmin($data=array()){
    $id=DB::table('admin')
          ->insert($data);
  }
}
