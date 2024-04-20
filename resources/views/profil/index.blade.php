@extends('layouts.main')

@section('content')
<section class="flex items-center bg-cover bg-center" id="beranda" style="min-height: 50vh; background-image:url('images/profil-msi.jpeg')">
    <div class="absolute inset-0 bg-black bg-opacity-50"></div>
    <div class="container relative z-10 mx-auto text-center text-white uppercase mt-6">
        <h2 class="w-fit mx-auto text-center font-bold text-3xl md:text-4xl lg:text-5xl ">Tentang Kami</h1>
        <nav class="w-full mt-2 rounded-md  flex items-center justify-center">
            <ol class="list-reset flex">
              <li>
                <a href="{{route('home')}}">Beranda</a>
              </li>
              <li>
                <span class="mx-2">/</span>
              </li>
              <li class="active">Tentang Kami</li>
            </ol>
          </nav>
    </div>
</section>

<section id="profil">
    <div class="flex items-center justify-center min-h-screen mx-12">
        <div class="">

            <h1 class="text-4xl font-bold pt-8 uppercase border-b-4 border-orange-500 mb-4">Tentang Yayasan Mentari Sehat Indonesia</h1>
            {{-- <div class="divider divider-warning"></div> --}}
            <div class="bg-slate-200 p-2">
                <p class="text-black">
                    Mentari Sehat Indonesia berdiri pada tanggal 22 Juli 2020 di Kota Semarang. Yayasan pendirian ini diprakarsai oleh Prof. Dr. Masrukhi, M.Pd (Rektor UNIMUS), Dr. Supriyanto, M.Pd., Hj. Siti Taqiyah, BA., Noor Diansyah, SKM., dan Chairul Basar, SE.             </p>
                <p class="mt-2 text-black">
                    Di bidang kesehatan, Yayasan Mentari Sehat berperan untuk menggerakkan masyarakat dalam upaya mewujudkan kemandirian dalam mengatasi masalah-masalah penyakit yang menular di masyarakat seperti TBC. Jejaring yayasan Mentari Sehat Indonesia sudah ada dan eksis di 34 kabupaten kota se-Jawa Tengah dan salah satunya adalah Yayasan Mentari Sehat Indonesia Cabang Kabupaten Demak yang berdiri tepatnya tanggal 13 November 2020             </p>
                <p class="mt-2 text-black">
                    Kantor Cabang Yayasan Mentari Sehat Indonesia ini juga memiliki kantor administratif masing-masing sehingga kedudukan, wilayah kerja, dan jejaring juga telah terbentuk dan terjalin program komunikasi dengan baik. 
                </p>
        </div>
        </div>
    </div>
</section>

{{-- Pengurus --}}
<section id="pengurus" class="py-8 bg-white min-h-screen">
    <div class="container mx-auto">
        <div class="w-fit mx-auto border-b-4 p-2 border-orange-500 text-start font-bold text-3xl text-slate-800 uppercase">Pengurus</div>
        <div class="p-2 text-center text-lg text-gray-400">Daftar pengurus SSR MSI Kabupaten Wonogiri.</div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 sm:grid-cols-2 gap-10 p-10">
        @if($pengurus->count() > 0)
            @foreach($pengurus as $p)
            <div class="flex flex-col items-center justify-center">

                <div class="h-72 w-72">
                    <img src="{{ ($p->foto == null) ? asset('foto_pengurus/562ebed9cd49b9a09baa35eddfe86b00.jpg') : asset('foto_pengurus/'.$p->foto) }}" class="object-fill h-full w-full rounded-full" alt="">
                </div>
                <div class="text-center pt-8">
                    <h3 class="font-bold text-xl text-slate-800">{{ $p->nama }}</h3>
                    <p class="text-gray-400 font-semibold italic">{{ $p->jabatan }}</p>
                </div>
            </div>
            @endforeach
        @else
        @endif
    </div>
</section>


@endsection