@extends('layouts.main')

@section('content')
<section class="flex items-center bg-cover bg-center" id="beranda" style="min-height: 50vh; background-image:url({{asset('images/profil-msi.jpeg')}})">
    <div class="absolute inset-0 bg-black bg-opacity-50"></div>
    <div class="container relative z-10 mx-auto text-center text-white uppercase mt-6">
        <h2 class="w-fit mx-auto text-center font-bold text-3xl md:text-4xl lg:text-5xl ">Tentang Kami</h1>
        <nav class="w-full mt-2 rounded-md text-xs md:text-sm lg:text-base flex items-center justify-center">
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

<section id="profil" class="mb-4 mt-4 mx-4 py-8">
    <h1 class="text-2xl md:text-3xl lg:text-4xl font-bold p-2 text-center lg:text-start uppercase border-b-4 lg:mx-24 text-gray-800 border-green-500 mb-4">Tentang Yayasan Mentari Sehat Indonesia</h1>
    <div class="lg:flex lg:flex-row-reverse w-full ">

        <div class="flex justify-center mb-4 mt lg:w-1/2 lg:me-24 lg:ms-2">
        <img class="h-full w-full" src="{{asset('images/tentang-kami.jpeg')}}"  alt="">
    </div>
    <div class="flex justify-center lg:w-1/2 lg:ms-24 lg:me-2">
        <div class="">
            
            {{-- <div class="divider divider-warning"></div> --}}
                <div class="p-2 lg:px-8 lg:py-12 text-sm lg:text-base text-gray-800 mb-4 bg-gray-100">
                    <p class="">
                        Mentari Sehat Indonesia berdiri pada tanggal 22 Juli 2020 di Kota Semarang. Yayasan pendirian ini diprakarsai oleh Prof. Dr. Masrukhi, M.Pd (Rektor UNIMUS), Dr. Supriyanto, M.Pd., Hj. Siti Taqiyah, BA., Noor Diansyah, SKM., dan Chairul Basar, SE.             </p>
                    <p class="mt-2 ">
                        Di bidang kesehatan, Yayasan Mentari Sehat berperan untuk menggerakkan masyarakat dalam upaya mewujudkan kemandirian dalam mengatasi masalah-masalah penyakit yang menular di masyarakat seperti TBC. Jejaring yayasan Mentari Sehat Indonesia sudah ada dan eksis di 34 kabupaten kota se-Jawa Tengah dan salah satunya adalah Yayasan Mentari Sehat Indonesia Cabang Kabupaten Demak yang berdiri tepatnya tanggal 13 November 2020             </p>
                    <p class="mt-2 ">
                        Kantor Cabang Yayasan Mentari Sehat Indonesia ini juga memiliki kantor administratif masing-masing sehingga kedudukan, wilayah kerja, dan jejaring juga telah terbentuk dan terjalin program komunikasi dengan baik. 
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Visi Misi --}}
{{-- <section id="visi-misi" class="py-8 min-h-screen bg-slate-700 text-white bg-cover bg-center" style="background-image: url('images/65ef0b371e821-tim-sub-sub-recipient-ssr-tbc-yayasan-mentari-sehat-indonesia-bersama-mahasiswa-magang-campus-leaders-program-clp-bakrie-center-foundation.jpg')">
    <div class="absolute inset-0 bg-black bg-opacity-50"></div>
    <div class="container relative flex flex-col items-center z-10 mx-auto">
        <div class="w-fit border-b-4 p-2 border-green-500 text-center  font-bold text-3xl uppercase">Visi Yayasan Mentari Indonesia</div>
        <div class="p-2 text-center text-lg text-gray-700 bg-white mt-4 max-w-2xl rounded-md hover:scale-105 transition-all duration-300">
            <p class="text-justify text-base p-4">Visi yayasan Mentari Sehat Indonesia adalah penggerak terwujudnya infrastruktur kesehatan non pemerintah dan dinamika kelompok sosial yang mampu secara mandiri menanggulangi masalah kesehatan, sosial, dan pendidikan di masyarakat. </p>
            </div>
        </div>
    </div>
    <div class="container relative flex flex-col items-center mx-auto my-8">
        <div class="w-fit border-b-4 p-2 border-green-500 text-center font-bold text-3xl uppercase mb-4">Misi Yayasan Mentari Indonesia</div>
        <div class="grid md:grid-flow-col gap-4 px-16">
            <div class=" bg-white p-2 rounded-md text-center hover:scale-105 transition-all duration-300">
                <h1 class="font-bold text-black p-2 text-xl">Bidang Kesehatan</h1>
                <p class="text-gray-700 p-2 text-sm text-justify">Menggerakkan masyarakat untuk mewujudkan kemandirian dalam mengatasi dan menanggulangi masalah penyakit menular langsung dan mampu menjadi penggerak perubahan perilaku hidup bersih dan sehat di masyarakat.</p>
            </div>
            <div class=" bg-white p-2 rounded-md text-center hover:scale-105 transition-all duration-300">
                <h1 class="font-bold text-black p-2 text-xl">Bidang Sosial</h1>
                <p class="text-gray-700 p-2 text-sm text-justify">Menggerakkan seluruh komponen untuk mendorong perubahan dan perbaikan kehidupan sosial masyarakat.</p>
            </div>
            <div class=" bg-white p-2 rounded-md text-center hover:scale-105 transition-all duration-300">
                <h1 class="font-bold text-black p-2 text-xl">Bidang Pendidikan</h1>
                <p class="text-gray-700 p-2 text-sm text-justify">Membantu pemerintah untuk ikut serta mencerdaskan kehidupan bangsa, mendorong masyarakat untuk memperoleh hak pendidikan secara merata dan berkeadilan.</p>
            </div>
        </div>
    </div>
</section> --}}

<section id="visi-misi" class="flex flex-row bg-cover bg-center justify-center items-center min-h-screen bg-white mb-4 mt-4 mx-4" style="">
    {{-- <div class="absolute inset-0 bg-black bg-opacity-50"></div> --}}
    <div class="z-10 flex flex-col-reverse lg:items-center lg:flex-row-reverse lg:mx-24">
        <div class="w-full lg:w-1/2 flex flex-wrap text-center lg:text-start lg:mt-12">
            <div class="w-full mx-4 ">
                <span class="block mt-2 font-bold text-2xl md:text-3xl lg:text-4xl text-gray-800 uppercase border-b-4 border-green-500 p-2 mb-2">Visi Yayasan MSI</span>
                {{-- <h2 class="font-medium text-slate-400 mb-5 uppercase">Kabupaten Wonogiri</h2> --}}
                <div class="">
                    <p class=" text-black mb-10 p-2 leading-relaxed text-sm lg:text-base">Penggerak terwujudnya infrastruktur kesehatan non pemerintah dan dinamika kelompok sosial yang mampu secara mandiri menanggulangi masalah kesehatan, sosial, dan pendidikan di masyarakat.</p>
                </div>
            </div>
        </div>
        <div class="w-full lg:w-1/2 lg:px-4 ">
            <img class="w-full h-full lg:rounded-lg" src="{{asset('images/workshop.jpg')}}" alt="">
        </div>
    </div>
</section>

<section id="" class="flex flex-row bg-cover bg-center justify-center items-center min-h-screen bg-white mb-4 mt-4 mx-4"  style="">
    {{-- <div class="absolute inset-0 bg-black bg-opacity-50"></div> --}}
    <div class="z-10 flex flex-col-reverse lg:items-center lg:flex-row lg:mx-24">
        <div class="w-full lg:w-1/2 flex flex-wrap lg:mt-12">
            <div class="w-full mx-4 ">
                <span class="block mt-2 font-bold text-2xl md:text-3xl lg:text-4xl text-center lg:text-start text-gray-800 uppercase border-b-4 border-green-500 p-2 mb-2">Misi Yayasan MSI</span>
                {{-- <h2 class="font-medium text-slate-400 mb-5 uppercase">Kabupaten Wonogiri</h2> --}}
                <div class="bg-white rounded-sm p-2 flex flex-row mb-4">
                    <div class="w-1/6 me-6">
                        <div class="h-full flex justify-center items-center">
                            <div class="bg-white w-16 h-16 p-4 flex justify-center items-center text-green-500 rounded-lg hover:text-white hover:bg-green-500 transition-all duration-300 shadow-xl">
                                <i class="fa-solid fa-briefcase-medical text-3xl"></i>
                            </div>  
                        </div>
                    </div>
                    <div class="w-5/6">
                        <h1 class="text-base font-bold">Bidang Kesehatan</h1>
                        <p class="text-black text-sm">Menggerakkan masyarakat untuk mewujudkan kemandirian dalam mengatasi dan menanggulangi masalah penyakit menular langsung dan mampu menjadi penggerak perubahan perilaku hidup bersih dan sehat di masyarakat.</p>
                    </div>
                </div>
                <div class="bg-white rounded-sm p-2 flex flex-row mb-4">
                    <div class="w-1/6 me-6">
                        <div class="h-full flex justify-center items-center">
                            <div class="bg-white w-16 h-16 p-4 flex justify-center items-center text-green-500 rounded-lg hover:text-white hover:bg-green-500 transition-all duration-300 shadow-xl">
                                <i class="fa-solid fa-users text-3xl"></i>
                            </div>  
                        </div>
                    </div>
                    <div class="w-5/6">
                        <h1 class="text-base font-bold">Bidang Sosial</h1>
                        <p class="text-black text-sm">Menggerakkan seluruh komponen untuk mendorong perubahan dan perbaikan kehidupan sosial masyarakat.</p>
                    </div>
                </div>
                <div class="bg-white rounded-sm p-2 flex flex-row mb-4">
                    <div class="w-1/6 me-6">
                        <div class="h-full flex justify-center items-center">
                            <div class="bg-white w-16 h-16 p-4 flex justify-center items-center text-green-500 rounded-lg hover:text-white hover:bg-green-500 transition-all duration-300 shadow-xl">
                                <i class="fa-solid fa-book-open text-3xl"></i>
                            </div>  
                        </div>
                    </div>
                    <div class="w-5/6">
                        <h1 class="text-base font-bold">Bidang Pendidikan</h1>
                        <p class="text-black text-sm">Membantu pemerintah untuk ikut serta mencerdaskan kehidupan bangsa, mendorong masyarakat untuk memperoleh hak pendidikan secara merata dan berkeadilan.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full lg:w-1/2 lg:px-4 ">
            <img class="w-full h-full lg:rounded-lg" src="{{asset('images/validasi-data1.jpeg')}}" alt="">
        </div>
    </div>
</section>

{{-- Pengurus --}}
<section id="pengurus" class="py-8 bg-white min-h-screen ">
    <div class="container mx-auto">
        <div class="w-fit mx-auto border-b-4 p-2 text-center lg:text-start border-green-500 font-bold text-2xl md:text-3xl lg:text-4xl text-gray-800 uppercase">Pengurus</div>
        <div class="p-2 text-center text-base md:text-lg text-gray-400">Daftar pengurus SSR MSI Kabupaten Wonogiri.</div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 sm:grid-cols-2  p-10">
        @if($pengurus->count() > 0)
            @foreach($pengurus as $p)
            <div class="flex flex-col items-center justify-center my-2">

                <div class="h-60 w-60 hover:scale-105 duration-300">
                    <img src="{{ ($p->foto == null) ? asset('foto_pengurus/562ebed9cd49b9a09baa35eddfe86b00.jpg') : asset('foto_pengurus/'.$p->foto) }}" class="object-fill h-full w-full rounded-full" alt="">
                </div>
                <div class="text-center pt-4">
                    <h3 class="font-bold text-xl text-gray-800">{{ $p->nama }}</h3>
                    <p class="text-gray-400 font-semibold italic">{{ $p->jabatan }}</p>
                </div>
            </div>
            @endforeach
        @else
        @endif
    </div>
</section>

@endsection