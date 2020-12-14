<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    // use HasFactory;
    protected $fillable = [
    	'namaKaryawan',
    	'noktp',
    	'alamat',
    	'nohp',
    	'jenisKaryawan',
    ];

    public function kategoriKaryawan() {
    	return $this->belongsTo('App\Models\KategoriKaryawan', 'jenisKaryawan');
    }   
}
