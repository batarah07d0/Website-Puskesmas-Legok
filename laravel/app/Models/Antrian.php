<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Antrian extends Model
{
    use HasFactory;
    protected $table = "antrian";
    protected $fillable = ['nomorantrian', 'id_pasien', 'nama_pasien', 'jenis_layanan', 'jam_layanan'];
    public $timestamps = false;
}
