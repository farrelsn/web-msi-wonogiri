@extends('layouts.main')

@section('content')
<div class="container px-12 min-h-screen" >
    <div class="">
        <h1 class="text-3xl font-bold pt-8">Daftar Berita & Kegiatan</h1>
        <div class="divider divider-warning"></div>
    </div>
    <div class="my-4 py-2">
        <h2 class="text-2xl" >Total Data Berita & Kegiatan: {{ ($berita == null) ? "0" : count($berita) }}<a href="{{ route('admin.daftar-berita.create') }}" class="btn btn-outline btn-xs sm:btn-sm md:btn-sm btn-primary text-white float-end">Tambah</a></h2>
        
    </div>
    {{-- Daftar Berita --}}
    <div class="overflow-x-auto border-solid mt-2">
      <table class="table">
        <thead>
          <tr class="text-center">
            <th></th>
            <th>Judul</th>
            <th>Isi</th>
            <th>Foto</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach($berita as $b)
          <tr>
              <th>{{$loop->iteration}}</th>
              <td>{{$b->judul}}</td>
              <td class="truncate" style="max-width: 200px;">{{$b->isi}}</td>
              <td ><img class="mx-auto" src="{{ ($b->gambar == null) ? asset('foto_berita/empty.jpg') : asset('foto_berita/'.$b->gambar) }}" alt="" style="width: 200px"></td>
              <td class="text-center">
                <a class="btn btn-warning text-white my-1" href="{{ route('admin.daftar-berita.edit', $b->id) }}">Edit</a>
                <form onsubmit="return confirm('Apakah Anda Yakin ingin menghapus data ini?');" action="{{ route('admin.daftar-berita.destroy', $b->id) }}" method="POST" class="inline-block">
                    @csrf
                    <button type="submit" class="btn btn-error text-white my-1">Hapus</button>
                </form>
              </td>
          </tr>
          @endforeach
        </tbody>
      </table>
  </div>
</div>
@endsection