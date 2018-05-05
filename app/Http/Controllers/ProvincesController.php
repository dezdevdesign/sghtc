<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ProvincesController extends Controller
{
    public function loadProvinces() {
    	return DB::table('provinces')
           ->select('id', 'text')
           ->get();
    }
}
