@extends('layouts.main')

@section('content')

<section class="flex items-center bg-cover bg-center min-w-full" id="beranda" style="min-height: 50vh; background-image:url('images/validasi-data.jpeg')">
    <div class="absolute inset-0 bg-black bg-opacity-50"></div>
    <div class="container relative z-10 mx-auto text-center text-white uppercase mt-6">
        <h2 class="w-fit mx-auto text-center font-bold text-3xl md:text-4xl lg:text-5xl ">Berita dan Kegiatan</h1>
        {{-- <div class="text-sm lg:text-base breadcrumbs flex items-center justify-center ">
            <ul>
                <li><a href="{{route('home')}}">Beranda</a></li> 
                <li class="active">Berita dan Kegiatan</li> 
            </ul>
        </div> --}}
        <nav class="w-full mt-2 rounded-md text-sm md:text-base flex items-center justify-center">
            <ol class="list-reset flex">
              <li>
                <a href="{{route('home')}}">Beranda</a>
              </li>
              <li><span class="mx-2">/</span></li>
              <li>
                <a href="{{route('berita')}}">Berita dan Kegiatan</a>
              </li>
              <li><span class="mx-2">/</span></li>
              <li class="active">{{ $berita->judul }}</li>
            </ol>
          </nav>
    </div>
</section>

<section id="berita" class="min-h-screen flex justify-center">
    {{-- Narasi --}}
    <div class="container mx-12">
        <div class="text-center border-b-4 border-orange-500 p-2">
            <h1 class="text-3xl font-bold pt-8">{{ $berita->judul }}</h1>
            <h2 class=" text-start text-sm pt-2 text-gray-400">Diposting oleh {{ $berita->user->username }}, Dibuat tanggal {{ $berita->created_at->toFormattedDateString() }}</h2>
        </div>
        <div class="w-full mt-2 p-4">
            <img src="{{ ($berita->gambar == null) ? asset('foto_berita/empty.jpg') : (file_exists(asset('foto_berita/'.$berita->gambar)) ? asset('foto_berita/empty.jpg') : asset('foto_berita/'.$berita->gambar))  }}" alt="{{ $berita->judul }}" class="w-full h-96 object-cover" />
        </div>
        <div>
            <p class="text-justify text-sm p-4">{{ $berita->isi }}</p>
        </div>
</section>

@endsection