<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TestingModel extends Model
{
  protected $fillable = [
      'testingId', 'testingCode', 'testingDes',
  ];

  public function addTesting($data=array()){
    $id=DB::table('testing')
          ->insert($data);
  }

  public function searchTesting($id){
         return DB::table('testing')
                    ->where('testingCode', 'LIKE','%' . $id . '%')
                    ->orWhere('testingDes', 'LIKE', '%' . $id . '%')
                    ->get();
  }
}
