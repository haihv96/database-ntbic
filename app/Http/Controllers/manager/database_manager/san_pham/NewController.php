<?php

namespace App\Http\Controllers\manager\database_manager\san_pham;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewController extends Controller
{
     public function index()
    {
    	return view('database_manager.san_pham.new');
    }
}
