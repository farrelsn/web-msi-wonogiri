@extends('layouts.main')

@section('content')
<div class="container px-12 min-h-screen" >
    {{-- Form Ubah Data Pengurus --}}
    <div class="bg-white rounded-xl shadow-xl p-8 w-full my-2">
        <a href="{{ route('admin.daftar-pengurus') }}" class="btn btn-outline btn-xs sm:btn-sm md:btn-sm btn-primary text-white my-2">Kembali</a>
        <div class="mt-2">
            <h2 class="text-2xl font-bold" >Form Ubah Data Pengurus</h2>
            <div class="divider divider-warning m-0"></div>
        </div>
        @if ($success = Session::get('success'))
            <div role="alert" class="alert alert-success mt-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                <span>{{ $success }}</span>
                <button id="close"><i class="fa-solid fa-xmark float-end"></i></button>
            </div>
            <script>
                document.getElementById('close').addEventListener('click', function() {
                    this.parentElement.style.display = 'none';
                });
            </script>
        @endif
        <form action="{{ route('admin.daftar-pengurus.update',$pengurus->id) }}" class="flex flex-col space-y-4  text-gray-600 " method="POST" enctype="multipart/form-data">
            @csrf
            {{-- Nama --}}
            <div>
                <label for="nama" class="text-sm">Nama</label>
                <input name="nama" type="text" id="nama" value="{{$pengurus->nama}}" class="form control input input-bordered w-full mt-2 hover:ring-2 ps-4" placeholder="Nama" required>
                @error('nama')
                    <span class="text-xs text-error">{{ $message }}</span>
                @enderror
            </div>
            {{-- Foto --}}
            <div>
                <label for="foto" class="text-sm">Foto</label>
                <img id="prev" class="w-64" src="{{ ($pengurus->foto == null) ? asset('foto_pengurus/562ebed9cd49b9a09baa35eddfe86b00.jpg') : asset('foto_pengurus/'.$pengurus->foto) }}" alt="">
                <input name="foto" type="file" id="foto" class="form control file-input file-input-bordered w-full mt-2 hover:ring-2" onchange="document.getElementById('prev').src = window.URL.createObjectURL(this.files[0])" />
                @error('foto')
                    <span class="text-xs text-error">{{ $message }}</span>
                @enderror
            </div>
            {{-- Jabatan --}}
            <div>
                <label for="jabatan" class="text-sm">Jabatan</label>
                <input name="jabatan" type="text" id="jabatan" value="{{$pengurus->jabatan}}" class="form control input input-bordered  w-full mt-2 hover:ring-2 ps-4" placeholder="Jabatan" required>
                @error('jabatan')
                    <span class="text-xs text-error">{{ $message }}</span>
                @enderror
            </div>
            <button class="btn btn-success inline-block self-end text-white" type="submit">Tambah</button>
        </form>
    </div>
</div>
@endsection