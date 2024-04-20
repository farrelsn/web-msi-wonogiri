<?php

namespace App\Http\Controllers;

use App\Models\pengurus;
use Illuminate\Http\Request;

class PengurusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function daftar(){
        $title = 'Daftar Pengurus';
        $pengurus = pengurus::all();
        return view('admin.daftar_pengurus.index', compact('title','pengurus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Daftar Pengurus';
        return view('admin.daftar_pengurus.tambah', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validate form
        // dd($request);
        // request()->dd();
        request()->validate([
            'foto' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'nama' => 'required',
            'jabatan' => 'required',
        ], [
            // 'foto.required' => 'Foto harus diisi',
            'foto.image' => 'Foto harus berupa gambar',
            'foto.mimes' => 'Foto harus berformat jpeg, png, jpg',
            'foto.max' => 'Foto maksimal berukuran 2MB',
            'nama.required' => 'Nama harus diisi',
            'jabatan.required' => 'Jabatan harus diisi',
        ]);

        // $upload_path = base_path('../');

        $image = $request->file('foto');

        if($image){
            $destinationPath = 'foto_pengurus';
            $imageName = time().$image->getClientOriginalName();
            $request->foto->move(public_path($destinationPath), $imageName);
        }
        else{
            $imageName = '';
        }

        
        //upload image
        // $imageName = time().$image->getClientOriginalName();
            
        // dd($request);

        //create post
        pengurus::create([
            'foto'     => $imageName,
            'nama'     => $request->nama,
            'jabatan'   => $request->jabatan,
        ]);

        //redirect to index
        return redirect()->route('admin.daftar-pengurus')->with(['success' => 'Data Berhasil Disimpan!']);
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
        $title = 'Edit Pengurus';
        $pengurus = pengurus::find($id);
        return view('admin.daftar_pengurus.edit', compact('title','pengurus'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        request()->validate([
            'foto' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'nama' => 'required',
            'jabatan' => 'required',
        ], [
            'foto.image' => 'Foto harus berupa gambar',
            'foto.mimes' => 'Foto harus berformat jpeg, png, jpg',
            'foto.max' => 'Foto maksimal berukuran 2MB',
            'nama.required' => 'Nama harus diisi',
            'jabatan.required' => 'Jabatan harus diisi',
        ]);

        // $pengurus = pengurus::find($id);
        $db = pengurus::where('id',$id)->update([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
        ]);

        $pengurus = pengurus::find($id);
        if($request->hasFile('foto')){
            if($pengurus->foto != ''){
                $destinationPath = 'foto_pengurus';
                $image_path = public_path($destinationPath).'/'.$pengurus->foto;
                if(file_exists($image_path)){
                    unlink($image_path);
                }
            }
            $image = $request->file('foto');
            $destinationPath = 'foto_pengurus';
            $imageName = time().$image->getClientOriginalName();
            $request->foto->move(public_path($destinationPath), $imageName);
            $db = pengurus::where('id',$id)->update([
                'foto' => $imageName,
            ]);
        }

        if($db){
            return redirect()->route('admin.daftar-pengurus')->with('success','Data berhasil diupdate');
        }
        else{
            return redirect()->route('admin.daftar-pengurus')->with('error','Data gagal diupdate');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        
        $pengurus = pengurus::find($id);

        if($pengurus){
            if($pengurus->foto != ''){
                $destinationPath = 'foto_pengurus';
                $image_path = public_path($destinationPath).'/'.$pengurus->foto;
                if(file_exists($image_path)){
                    unlink($image_path);
                }
            }
            $pengurus->delete();
            return redirect()->route('admin.daftar-pengurus')->with('success','Data berhasil dihapus');
        }
        else{
            return redirect()->route('admin.daftar-pengurus')->with('error','Data tidak ditemukan');
        }
    }
}
