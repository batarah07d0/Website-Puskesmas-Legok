<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\ProgramKegiatan;
use App\Models\Post;



class HomeController extends Controller
{
    public function index()
    {
        $photos = ProgramKegiatan::all();
        $post = Post::all();

        return view('progkegdepan.index', compact('photos', 'post'));
    }
}
