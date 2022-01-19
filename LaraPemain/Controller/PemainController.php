<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PemainController extends Controller
{
    public function players()
    {
    	return view('statistik.pemain');
    }
}
