@extends('layouts.main')

@section('content')
    
{{-- <section id="beranda" style="min-height: 50vh">
    <div class="flex flex-col h-96 justify-center items-center text-white" >
        <h2 class="text-3xl font-bold">Berita & Kegatan</h1>
        <h1 class="text-4xl font-bold mt-6 uppercase">Yayasan Mentari Sehat Indonesia</h1>
        <h3 class="text-4xl font-bold mt-2 uppercase">Kabupaten Wonogiri</h1>
    </div>
    
</section> --}}

<section class="flex items-center bg-cover bg-center" id="beranda" style="min-height: 50vh; background-image:url('images/validasi-data.jpeg')">
    <div class="absolute inset-0 bg-black bg-opacity-50"></div>
    <div class="container relative z-10 mx-auto text-center text-white uppercase mt-6">
        <h2 class="w-fit mx-auto text-center font-bold text-3xl md:text-4xl lg:text-5xl ">Berita dan Kegiatan</h1>
        {{-- <div class="text-sm lg:text-base breadcrumbs flex items-center justify-center ">
            <ul>
                <li><a href="{{route('home')}}">Beranda</a></li> 
                <li class="active">Berita dan Kegiatan</li> 
            </ul>
        </div> --}}
        <nav class="w-full mt-2 rounded-md  flex items-center justify-center">
            <ol class="list-reset flex">
              <li>
                <a href="{{route('home')}}">Beranda</a>
              </li>
              <li>
                <span class="mx-2">/</span>
              </li>
              <li class="active">Berita dan Kegiatan</li>
            </ol>
          </nav>
    </div>
    
</section>

<section class="flex flex-col justify-center items-center bg-slate-200 text-black py-8" id="berita-terbaru" style="min-height: 50vh;">
    <div class="w-fit mx-auto border-b-4 p-2 border-orange-500 text-center font-bold text-3xl text-slate-800 uppercase">Berita & Kegiatan Terbaru</div>
    <div class="card card-side rounded-sm bg-base-100 shadow-xl my-4 ">
        <figure><img class="h-64 w-64 " src="{{ ($beritaTerbaru[0]->gambar == null) ? asset('foto_berita/empty.jpg') : (file_exists(asset('foto_berita/'.$beritaTerbaru[0]->gambar)) ? asset('foto_berita/empty.jpg') : asset('foto_berita/'.$beritaTerbaru[0]->gambar))  }}" alt="Foto Berita"/></figure>
        <div class="card-body h-64 w-96 ">
          <h2 class="card-title">{{ $beritaTerbaru[0]->judul }}</h2>
          <p>{{ Str::limit($beritaTerbaru[0]->isi, 100) }}</p>
          <div class="card-actions justify-end">
            <a href="{{ route('berita.show',$beritaTerbaru[0]->id) }}" class="text-base font-semibold text-white bg-yellow-300 py-3 px-8 mt-2 rounded-full hover:shadow-lg hover:bg-yellow-500 hover:text-slate-200 transition duration-300 ease-in-out">Selengkapnya</a>
          </div>
        </div>
    </div>
    {{-- <div class="text-center">
        <h1>Berita Terbaru</h1>
    </div>
    <div class="flex justify-center items-center  flex-col bg-white">
        <div class="">
            <img class="w-64" src="{{ ($berita[0]->gambar == null) ? asset('foto_berita/empty.jpg') : (file_exists(asset('foto_berita/'.$berita[0]->gambar)) ? asset('foto_berita/empty.jpg') : asset('foto_berita/'.$berita[0]->gambar))  }}"  alt="">
        </div>
        <div class="text-center">
            <h1>Berita Terbaru</h1>
        </div>
    </div> --}}
</section>
<section id="berita" class="py-8 min-h-screen ">
    <div class="container mx-auto ">
        <div class="w-fit mx-auto border-b-4 p-2 border-orange-500 text-center font-bold text-3xl text-slate-800 uppercase">Berita & Kegiatan Lainnya</div>
        <div class="p-2 text-center text-lg text-gray-400">Kumpulan kegiatan terbaru yang dilaksanakan oleh SSR MSI Kabupaten Wonogiri.</div>
        {{-- <div class="divider divider-warning font-bold"></div> --}}
        @if($berita->count() > 0)
        <div class="grid grid-cols-1 md:grid-cols-3 sm:grid-cols-2 gap-10 p-10">
            @foreach ($berita as $b)
            <div
                class="border-r border-b border-l border-slate-400 lg:border-t lg:border-slate-400 bg-white rounded-b lg:rounded-b-none h-full lg:rounded-r hover:scale-105 transition-all duration-300 flex flex-col justify-start leading-normal">
                <div class="h-80 w-full">
                    <img class="object-fill h-full w-full" src="{{ ($b->gambar == null) ? asset('foto_berita/empty.jpg') : (file_exists(asset('foto_berita/'.$b->gambar)) ? asset('foto_berita/empty.jpg') : asset('foto_berita/'.$b->gambar))  }}" class="w-contain mb-3">
                </div>
                <div class="p-4 pt-2 text-center ">
                    <div class="mb-8">
                        <a href="{{ route('berita.show',$b->id) }}" class="text-gray-900 font-bold text-lg mb-2 inline-block">{{ $b->judul }}</a>
                        <p class="text-gray-700 text-sm">{{ Str::limit($b->isi, 200) }}</p>
                    </div>
                    <div class="flex items-center justify-center">
                        <a href="{{ route('berita.show',$b->id) }}" class="text-base font-semibold text-white bg-yellow-300 py-3 px-8 mt-2 rounded-full hover:shadow-lg hover:bg-yellow-500 hover:text-slate-200 transition duration-300 ease-in-out">Selengkapnya</a>

                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="flex justify-center items-center">
            {{ $berita->links('../layouts.pagination') }}
        </div>
        @else
        <div class="flex flex-col items-center justify-center h-screen">
            <img src="{{ asset('images/not_found.jpg') }}" alt="" style="width: 25%">
            <h2 class="text-xl mt-2 text-slate-700">Data Tidak Ditemukan</h2>
            <h3 class="text-md text-slate-400">Belum ada berita lainnya</h3>
        </div>
        @endif
        
    </div>
</section>

@endsection