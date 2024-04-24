<?php

namespace App\Http\Controllers;

use App\Models\berita;
use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'MSI Kabupaten Wonogiri | Berita';
        $beritaTerbaru = berita::orderBy('id', 'desc')->take(1)->get();
        if($beritaTerbaru){
            $newest = [$beritaTerbaru[0]->id];
            // selain terbaru
            $berita = berita::whereNotIn('id', $newest)->orderBy('id', 'desc')->paginate(5);
        }
        else{
            $berita = berita::orderBy('id', 'desc')->paginate(5);

        }
        return view('berita.index', compact('title','berita','beritaTerbaru'));
    }

    public function daftar(){
        $title = 'Daftar Berita & Kegiatan';
        $berita = berita::all();
        $berita = berita::orderBy('id', 'desc')->get();
        // $user = users::all();
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

        $user_id = Auth::user()->id;

        berita::create([
            'gambar' => $imageName,
            'judul' => $request->judul,
            'isi' => $request->isi,
            'user_id' => $user_id
        ]);

        return redirect()->route('admin.daftar-berita')->with('success', 'Berita berhasil ditambahkan!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $title = 'MSI Kabupaten Wonogiri | Berita';
        $berita = berita::find($id);
        return view('berita.show', compact('title','berita'));
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
        request()->validate([
            'foto' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'judul' => 'required',
            'isi' => 'required',
        ], [
            'foto.image' => 'Foto harus berupa gambar',
            'foto.mimes' => 'Foto harus berformat jpeg, png, jpg',
            'foto.max' => 'Foto maksimal berukuran 2MB',
            'judul.required' => 'Judul harus diisi',
            'isi.required' => 'Isi harus diisi',
        ]);

        $berita = berita::find($id);
        $image = $request->file('foto');

        if($image){
            $destinationPath = 'foto_berita';
            $imageName = time().$image->getClientOriginalName();
            $image->move($destinationPath, $imageName);

            if($berita->gambar != ''){
                $destinationPath = 'foto_berita';
                $image_path = public_path($destinationPath).'/'.$berita->gambar;
                if(file_exists($image_path)){
                    unlink($image_path);
                }
            }
        }
        else{
            $imageName = $berita->gambar;
        }

        $berita->update([
            'gambar' => $imageName,
            'judul' => $request->judul,
            'isi' => $request->isi,
        ]);

        return redirect()->route('admin.daftar-berita')->with('success', 'Berita berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $berita = berita::find($id);

        if($berita){
            if($berita->gambar != ''){
                $destinationPath = 'foto_berita';
                $image_path = public_path($destinationPath).'/'.$berita->gambar;
                if(file_exists($image_path)){
                    unlink($image_path);
                }
            }
            $berita->delete();
            return redirect()->route('admin.daftar-berita')->with('success','Data berhasil dihapus');
        }
        else{
            return redirect()->route('admin.daftar-berita')->with('error','Data tidak ditemukan');
        }
    }
}
