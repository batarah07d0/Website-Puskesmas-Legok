<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dokter extends Model
{
    use HasFactory;

    use SoftDeletes;
    protected $table = 'dokter';


    protected $fillable = [
        'name', 'foto', 'pendidikan', 'spesialisasi', 'jadwal_praktek', 'jamsenin', 'jamselasa', 'jamrabu', 'jamkamis', 'jamjumat', 'jamsabtu'
    ];
}
