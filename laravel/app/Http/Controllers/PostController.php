<?php

namespace App\Http\Controllers;



use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $post = Post::all();
        return view('post.index', compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'foto' => 'image|mimes:jpeg,png,jpg,gif',
        ]);

        $file = $request->file('foto');
        $extension = $file->getClientOriginalExtension();
        $fileName = hash('md5', time() . $file->getClientOriginalName()) . '.' . $extension;

        $file->storeAs('public/imgpost', $fileName);

        Post::create([
            'foto' => $fileName,
        ]);


        return redirect('/post')->with('success', 'Post berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $post = Post::findOrFail($id);
        return view('post.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $post = Post::find($id);
        return view('post.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $request->validate([
            'foto' => 'image|mimes:jpeg,png,jpg',
        ]);

        $post = Post::find($id);

        if ($request->hasFile('foto')) {
            // Hapus gambar lama jika ada
            if ($post->foto) {
                Storage::delete('public/imgpost/' . $post->foto);
            }

            $file = $request->file('foto');
            $extension = $file->getClientOriginalExtension();
            $fileName = hash('md5', time() . $file->getClientOriginalName()) . '.' . $extension;

            // Simpan di storage/app/public/imgpost
            $file->storeAs('public/imgpost', $fileName);

            $post->update([
                'foto' => $fileName,
            ]);
        }

        return redirect()->route('post')->with('success', 'Data Post berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::find($id);

        $gambarPath = $post->foto;

        $post->delete();

        if ($gambarPath) {
            $gambarFullPath = 'public/imgpost/' . $gambarPath;

            if (Storage::exists($gambarFullPath)) {
                Storage::delete($gambarFullPath);
            }
        }
        return redirect()->route('post')->with('success', 'Data Post berhasil dihapus.');
    }
}
