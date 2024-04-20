@extends('layouts.main')

@section('content')
<div class="container px-12 min-h-screen" >
    {{-- Form Tambah Berita --}}
    <div class="bg-white rounded-xl shadow-xl p-8 w-full my-2">
        <a href="{{ route('admin.daftar-pengurus') }}" class="btn btn-outline btn-xs sm:btn-sm md:btn-sm btn-primary text-white my-2">Kembali</a>
        <div class="mt-2">
            <h2 class="text-2xl font-bold" >Form Tambah Berita</h2>
            <div class="divider divider-warning m-0"></div>
        </div>
        <form action="{{ route('admin.daftar-berita.store') }}" class="flex flex-col space-y-4  text-gray-600 " method="POST" enctype="multipart/form-data">
            @csrf
            {{-- Judul --}}
            <div>
                <label for="judul" class="text-sm">Judul</label>
                <input name="judul" type="text" id="judul" class="form control input input-bordered w-full mt-2 hover:ring-2 ps-4" placeholder="Judul" required>
                @error('judul')
                    <span class="text-xs text-error">{{ $message }}</span>
                @enderror
            </div>
            {{-- Isi --}}
            <div>
                <label for="isi" class="text-sm">Isi Berita</label>
                <textarea name="isi" id="isi" class="textarea textarea-bordered text-sm w-full mt-2 ps-4" rows="8" placeholder="Isi berita" required></textarea>
                @error('isi')
                    <span class="text-xs text-error">{{ $message }}</span>
                @enderror
            </div>
            {{-- Foto --}}
            <div>
                <label for="foto" class="text-sm">Foto</label>
                <input name="foto" type="file" id="foto" class="form control file-input file-input-bordered w-full mt-2 hover:ring-2" onchange="document.getElementById('prev').src = window.URL.createObjectURL(this.files[0])" />
                @error('foto')
                    <span class="text-xs text-error">{{ $message }}</span>
                @enderror
                <img class="mt-2" id="prev" class="w-full" src="" alt="">
            </div>
            <button class="btn btn-success inline-block self-end text-white" type="submit">Tambah</button>
        </form>
    </div>
</div>
@endsection