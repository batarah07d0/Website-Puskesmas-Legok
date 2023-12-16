<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokter;
use App\Models\Staff;
use App\Models\Prestasi;

class Home4Controller extends Controller
{
        public function index()
        {
                $list = Dokter::all();
                $namas = Dokter::all();
                $lists = Staff::all();
                $namast = Staff::all();
                $fotop = Prestasi::all();
                $namap = Prestasi::all();
                return view('tentangkami', compact('list', 'namas', 'fotop', 'namap', 'lists', 'namast'));
        }
}
