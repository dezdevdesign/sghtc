<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Patient extends Model
{
    protected $guarded = [];

    public function name($patient_id) {
    	return DB::table('patients')->select(DB::raw('CONCAT(last_name, ", ", first_name, " ", middle_name) AS name'))->where('id', $patient_id)->pluck('name')->first();
    }
}
