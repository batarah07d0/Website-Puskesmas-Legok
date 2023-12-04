<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProgramKegiatan extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'program_kegiatan';

    protected $fillable = [
        'nama_event', 'deskripsi', 'foto', 'tanggal_mulai', 'tanggal_selesai',
    ];
}
