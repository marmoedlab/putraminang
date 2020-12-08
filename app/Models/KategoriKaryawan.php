<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriKaryawan extends Model
{
    // use HasFactory;
    protected $table = 'kategorikaryawans';

    protected $fillable = [
    	'kategori',
    ];

}
