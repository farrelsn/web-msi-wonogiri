@extends('layouts.main')

@section('content')
@if ($success = Session::get('success'))
    <div class="absolute top-0 z-50 inset-x-0 mx-4">
        <div role="alert" class="alert alert-success mt-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
            <span class="ms-2 flex-grow">{{ $success }}</span>
            <button id="close"><i class="fa-solid fa-xmark float-end"></i></button>
        </div>
    </div>
    <script>
        document.getElementById('close').addEventListener('click', function() {
            this.parentElement.style.display = 'none';
        });
    </script>
@endif
@if ($error  = Session::get('error'))
    <div class="absolute top-0 z-50 inset-x-0 mx-4">
        <div role="alert" class="alert alert-error mt-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
            <span class="ms-2 flex-grow">{{ $error }}</span>
            <button id="close"><i class="fa-solid fa-xmark float-end"></i></button>
        </div>
    </div>
    <script>
        document.getElementById('close').addEventListener('click', function() {
            this.parentElement.style.display = 'none';
        });
    </script>
@endif
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
    @if (count($berita) != 0)
      <table class="table">
        <thead>
          <tr class="text-center">
            <th></th>
            <th>Judul</th>
            <th>Isi</th>
            <th>Foto</th>
            <th>Uploader</th>
            <th>Dibuat tanggal</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach($berita as $b)
          <tr>
              <th>{{$loop->iteration}}</th>
              <td>{{$b->judul}}</td>
              <td>{{ strip_tags(Str::limit($b->isi, 50)) }}</td>
              <td >
                {{-- @if ($b->gambar != null)
                  @php
                      $gambarPath = 'foto_berita/'.$b->gambar;
                      $gambarExists = Storage::disk('public')->exists($gambarPath);
                      $gambarSrc = $gambarExists ? asset($gambarPath) : asset('foto_berita/empty.jpg');
                  @endphp
                  <img class="mx-auto" src="{{ $gambarSrc }}" alt="" style="width: 200px">
                @else
                    <img class="mx-auto" src="{{ asset('foto_berita/empty.jpg') }}" alt="" style="width: 200px">
                @endif --}}
                <img class="mx-auto" src="{{ ($b->gambar == null) ? asset('foto_berita/empty.jpg') : (file_exists(asset('foto_berita/'.$b->gambar)) ?  asset('foto_berita/empty.jpg') : asset('foto_berita/'.$b->gambar)) }}" alt="" style="width: 200px"></td>
              <td class="text-center">{{$b->user->username}}</td>
              <td class="text-center">{{ $b->created_at }}</td>
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
    @else
    <div class="flex flex-col items-center justify-center h-screen">
        <img src="{{ asset('images/not_found.jpg') }}" alt="" style="width: 25%">
        <h2 class="text-xl mt-2 text-black">Data Tidak Ditemukan</h2>
        <h3 class="text-lg text-slate-400">Belum ada berita</h3>
    </div>
    @endif
  </div>
</div>
@endsection