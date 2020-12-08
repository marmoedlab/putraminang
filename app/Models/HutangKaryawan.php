<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HutangKaryawan extends Model
{
    // use HasFactory;
    protected $fillable = [
    	'tanggalHutang',
    	'namaKaryawan',
    	'jumlahHutang',
    	'keterangan'
    ];
}
