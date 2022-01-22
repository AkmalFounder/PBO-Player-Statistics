<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fooball extends Model
{
    use HasFactory;

    protected $table = 'tas';
    protected $primaryKey ="id";
    protected $fillable = [
       
        'id','name','position','age','league','club','contract',
        'rating'
    ]; 

    // protected $fillable = [
    //     'Kode_Dosen','Nama_Dosen','judul','pembimbing_1','pembimbing_2','status'
    // ]; 
    protected $guarded = [];
    protected $dates = ['created_at'];
}
