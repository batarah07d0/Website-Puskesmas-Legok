<?php

namespace App\Http\Controllers;

use App\Models\Quota;
use Illuminate\Http\Request;

class QuotaController extends Controller
{
    public function getpoliquota()
    {
        $quotas = Quota::where('id', 1)->get();
        foreach ($quotas as $q) {
            $quota = $q->quota;
        }
        return view('daftaronline', ['quota' => $quota]);
    }
}
