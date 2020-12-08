<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DebitKredit extends Model
{
    // use HasFactory;
    protected $fillable = [
    	'tanggal',
    	'pilih',
    	'jumlah',
    	'keterangan',
    	'idPelanggan'
    ];
}
