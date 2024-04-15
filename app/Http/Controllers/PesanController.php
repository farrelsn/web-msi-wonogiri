<?php

namespace App\Http\Controllers;

use App\Models\pesan;
use Illuminate\Http\Request;

class PesanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function daftar(){
        $title = 'Daftar Pesan';
        $pesan = pesan::all();
        return view('admin.daftar_pesan.index', compact('title','pesan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
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
    public function destroy($id)
    {
        $post = pesan::find($id);
        if($post){
            $post->delete();
            return redirect()->route('admin.daftar-pesan')->with('success','Data berhasil dihapus');
        }
        else{
            return redirect()->route('admin.daftar-pesan')->with('error','Data tidak ditemukan');
        }
    }
}
