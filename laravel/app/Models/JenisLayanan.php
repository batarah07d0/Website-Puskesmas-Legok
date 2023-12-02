<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JenisLayanan extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'jenis_layanan';

    protected $fillable = ['kategori', 'waktu_pelayanan'];
}
