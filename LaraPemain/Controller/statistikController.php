<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class statistikController extends Controller
{
    public function teams()
    {
    	return view('statistik.index');
    }
}
