<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class BarangaysController extends Controller
{
    public function loadBarangays($city_id) {
    	return DB::table('barangays')
	       ->select('id', 'text')
	       ->where('city_id', '=', $city_id)
	       ->get();
    }
}
