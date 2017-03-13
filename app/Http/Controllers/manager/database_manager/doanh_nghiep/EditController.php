<?php

namespace App\Http\Controllers\manager\database_manager\doanh_nghiep;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\doanh_nghiep_khcn;

class EditController extends Controller
{
    public function index($id) {
    	$doanh_nghiep = doanh_nghiep_khcn::find($id);
    	return view('database_manager.doanh_nghiep.edit')->with(['doanh_nghiep'=>$doanh_nghiep]);
    }
}
