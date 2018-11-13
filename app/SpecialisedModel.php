<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SpecialisedModel extends Model
{
    public function searchSpecialisedin($id){
        return DB::table('specialised')
            ->where('SpeCode', 'LIKE','%' . $id . '%')
            ->orWhere('SpeDescription', 'LIKE', '%' . $id . '%')
            ->get();
    }
}
