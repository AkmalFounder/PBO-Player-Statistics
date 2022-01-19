 <?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PemainController;
use App\Http\Controllers\statistikController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function (){
    return view('layouts.Dashboard');
});

Route::get('/players', function (){
    return view('statistik.pemain');
});

Route::get('/teams', function (){
    return view('statistik.index');
});

Route::get('/Datapemain', function (){
    return view('statistik.DataPemain');
});