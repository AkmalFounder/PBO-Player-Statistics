<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fooball;

class FooballController extends Controller
{
    public function index()
    {
        $data = Fooball::all();
        //dd($data);
        return view('statistik.pemain', compact('data'));
    }

    public function ubahdata($id)
    {
        $data = Fooball::find($id);
        // dd($data);
        return view('layouts.ubahdata', compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = Fooball::find($id);
        // dd($request->all());
        $data->update($request->all());
        return redirect()->route('statistik.pemain')->with('success','Data Berhasil di Edit');
    }
}
