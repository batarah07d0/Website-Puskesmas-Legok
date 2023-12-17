<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;

class Home4Controller extends Controller
{
    public function index()
    {
        $list = Staff::all();
        return view('tentangkami', compact('list'));
    }
}
