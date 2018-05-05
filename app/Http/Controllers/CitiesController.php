<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CitiesController extends Controller
{
    public function loadCities($province_id) {
    	return DB::table('cities')
	       ->select('id', 'text')
	       ->where('province_id', '=', $province_id)
	       ->get();
    }
}
