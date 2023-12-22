<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class JenisLayanan extends Model
{
    use HasFactory;

    protected $table = 'jenis_layanan';

    protected $fillable = ['kategori', 'waktu_pelayanan'];

    public static function getEnumValues($table, $column)
    {
        $columnInfo = DB::table('information_schema.columns')
            ->select('column_type')
            ->where('table_name', $table)
            ->where('column_name', $column)
            ->first();

        if ($columnInfo && strpos($columnInfo->column_type, 'enum') === 0) {
            preg_match('/\((.*)\)/', $columnInfo->column_type, $matches);
            $enumValues = explode(',', $matches[1]);
            $enumValues = array_map(fn ($value) => trim($value, "'"), $enumValues);
            return $enumValues;
        }

        return [];
    }

    public static function getEnumValue($table, $column)
    {
        $columnInfo = DB::table('information_schema.columns')
            ->select('column_type')
            ->where('table_name', $table)
            ->where('column_name', $column)
            ->first();

        if ($columnInfo && strpos($columnInfo->column_type, 'enum') === 0) {
            preg_match('/\((.*)\)/', $columnInfo->column_type, $matches);
            $enumValues = explode(',', $matches[1]);
            $enumValues = array_map(fn ($value) => trim($value, "'"), $enumValues);
            return $enumValues;
        }

        return [];
    }
}
