<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pasien extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'nik', 'nama_lengkap', 'no_bpjs', 'tempat_lahir', 'tanggal_lahir',
        'kepala_keluarga', 'agama', 'kecamatan', 'desa', 'alamat',
    ];
}
