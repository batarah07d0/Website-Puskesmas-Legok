<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StrukturOrganisasi extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'struktur_organisasi';

    protected $fillable = ['nama', 'jabatan'];
}
