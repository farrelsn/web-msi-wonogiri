<?php

namespace App\Http\Controllers;

use App\Models\berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'MSI Kabupaten Wonogiri | Berita';
        $berita = berita::all();
        return view('berita.index', compact('title','berita'));
    }

    public function daftar(){
        $title = 'Daftar Berita & Kegiatan';
        $berita = berita::all();
        return view('admin.daftar_berita.index', compact('title','berita'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Daftar Berita & Kegiatan';
        return view('admin.daftar_berita.tambah', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        request()->validate([
            'foto' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'judul' => 'required',
            'isi' => 'required',
        ], [
            // 'foto.required' => 'Foto harus diisi',
            'foto.image' => 'Foto harus berupa gambar',
            'foto.mimes' => 'Foto harus berformat jpeg, png, jpg',
            'foto.max' => 'Foto maksimal berukuran 2MB',
            'judul.required' => 'Judul harus diisi',
            'isi.required' => 'Isi harus diisi',
        ]);

        $image = $request->file('foto');

        if($image){
            $destinationPath = 'foto_berita';
            $imageName = time().$image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
        }
        else{
            $imageName = '';
        }

        berita::create([
            'gambar' => $imageName,
            'judul' => $request->judul,
            'isi' => $request->isi,
        ]);

        return redirect()->route('admin.daftar-berita')->with('success', 'Berita berhasil ditambahkan!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $title = 'Edit Berita & Kegiatan';
        $berita = berita::find($id);
        return view('admin.daftar_berita.edit', compact('title','berita'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
    }
}
