<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ppdb extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama' , 'jk' , 'alamat', 'agama', 'asal_sekolah', 'minat_jurusan'
    ];
}
