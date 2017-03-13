<?php

namespace App\Http\Controllers\manager\database_manager\chuyen_gia;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
    	return view('database_manager.chuyen_gia.index');
    }
}
