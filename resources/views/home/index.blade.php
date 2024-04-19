@extends('layouts.main')

@section('content')

{{-- Hero --}}
<section id="home" class="flex items-center bg-cover bg-center min-h-screen" style="background-image: url('images/msi-wonogiri-puskesmas.jpeg')">
    <div class="absolute inset-0 bg-black bg-opacity-50"></div>
    <div class="container relative z-10 mx-auto ">
        <div class="flex flex-wrap text-center lg:text-start">
            <div class="w-full lg:w-1/2 px-4">
                <h1 class="text-base font-semibold text-green-500">Selamat Datang di Website Resmi...</h1>
                <span class="block font-bold  text-3xl lg:text-4xl text-white uppercase">Yayasan Mentari Sehat Indonesia</span>
                <h2 class="font-medium text-slate-400 mb-5 uppercase">Kabupaten Wonogiri</h2>
                <p class="font-bold italic text-slate-200 mb-10 leading-relaxed">“Segeralah Shalat agar hatimu tenang, Istighfarlah agar kecewamu hilang. Dan Berdoalah agar bahagiamu segera datang.”</p>
                <a href="#berita" class="text-base font-semibold text-white bg-green-500 py-3 px-8 rounded-full hover:shadow-lg hover:bg-green-700 hover:text-slate-200 transition duration-300 ease-in-out">Selengkapnya</a>
            </div>
            {{-- <div class="w-full lg:w-1/2 px-4">
                
            </div> --}}
        </div>
    </div>
</section>

<section id="berita" class="py-8 min-h-screen ">
    <div class="container mx-auto ">
        <div class="w-fit mx-auto border-b-4 p-2 border-orange-500 text-center font-bold text-3xl text-slate-800 uppercase">Berita & Kegiatan</div>
        <div class="p-2 text-center text-lg text-gray-400">Kumpulan kegiatan terbaru yang dilaksanakan oleh SSR MSI Kabupaten Wonogiri.</div>
        {{-- <div class="divider divider-warning font-bold"></div> --}}
        <div class="grid grid-cols-1 md:grid-cols-3 sm:grid-cols-2 gap-10 p-10">
            <div
                class="border-r border-b border-l border-slate-400 lg:border-t lg:border-slate-400 bg-white rounded-b lg:rounded-b-none h-full lg:rounded-r flex flex-col justify-start leading-normal">
                <div class="h-96 w-full">
                    <img class="object-fill h-full w-full" src="https://images.pexels.com/photos/1181467/pexels-photo-1181467.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=1&amp;w=500" class="w-contain mb-3">
                </div>
                <div class="p-4 pt-2 text-center">
                    <div class="mb-8">
                        <a href="#" class="text-gray-900 font-bold text-lg mb-2 inline-block">Can
                            coffee make you a better developer?</a>
                        <p class="text-gray-700 text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid harum expedita sapiente debitis commodi autem deleniti illo laudantium ullam, voluptatem, recusandae fugit consequuntur saepe voluptas doloribus. Modi enim laboriosam nihil.</p>
                    </div>
                    <div class="flex items-center justify-center">
                        <a href="" class="text-base font-semibold text-white bg-yellow-300 py-3 px-8 mt-2 rounded-full hover:shadow-lg hover:bg-yellow-500 hover:text-slate-200 transition duration-300 ease-in-out">Selengkapnya</a>

                    </div>
                </div>
            </div>
    
            <div
                class="border-r border-b border-l border-slate-400 lg:border-t lg:border-slate-400 bg-white rounded-b lg:rounded-b-none h-full lg:rounded-r flex flex-col justify-start leading-normal">
                <div class="h-96 w-full">
                    <img class="object-fill h-full w-full" src="https://images.pexels.com/photos/1181467/pexels-photo-1181467.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=1&amp;w=500" class="w-contain mb-3">
                </div>
                <div class="p-4 pt-2 text-center">
                    <div class="mb-8">
                        <a href="#" class="text-gray-900 font-bold text-lg mb-2 hover:text-indigo-600 inline-block">Can
                            coffee make you a better developer?</a>
                        <p class="text-gray-700 text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid harum expedita sapiente debitis commodi autem deleniti illo laudantium ullam, voluptatem, recusandae fugit consequuntur saepe voluptas doloribus. Modi enim laboriosam nihil.</p>
                    </div>
                    <div class="flex items-center justify-center">
                        <a href="" class="text-base font-semibold text-white bg-yellow-300 py-3 px-8 mt-2 rounded-full hover:shadow-lg hover:bg-yellow-500 hover:text-slate-200 transition duration-300 ease-in-out">Selengkapnya</a>

                    </div>
                </div>
            </div>

            <div
                class="border-r border-b border-l border-slate-400 lg:border-t lg:border-slate-400 bg-white rounded-b lg:rounded-b-none h-full lg:rounded-r flex flex-col justify-start leading-normal">
                <div class="h-96 w-full">
                    <img class="object-fill h-full w-full" src="https://images.pexels.com/photos/1181467/pexels-photo-1181467.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=1&amp;w=500" class="w-contain mb-3">
                </div>
                <div class="p-4 pt-2 text-center">
                    <div class="mb-8">
                        <a href="#" class="text-gray-900 font-bold text-lg mb-2 hover:text-indigo-600 inline-block">Can
                            coffee make you a better developer?</a>
                        <p class="text-gray-700 text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid harum expedita sapiente debitis commodi autem deleniti illo laudantium ullam, voluptatem, recusandae fugit consequuntur saepe voluptas doloribus. Modi enim laboriosam nihil.</p>
                    </div>
                    <div class="flex items-center justify-center">
                        <a href="" class="text-base font-semibold text-white bg-yellow-300 py-3 px-8 mt-2 rounded-full hover:shadow-lg hover:bg-yellow-500 hover:text-slate-200 transition duration-300 ease-in-out">Selengkapnya</a>

                    </div>
                </div>
            </div>

            <div
                class="border-r border-b border-l border-slate-400 lg:border-t lg:border-slate-400 bg-white rounded-b lg:rounded-b-none h-full lg:rounded-r flex flex-col justify-start leading-normal">
                <div class="h-96 w-full">
                    <img class="object-fill h-full w-full" src="https://images.pexels.com/photos/1181467/pexels-photo-1181467.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=1&amp;w=500" class="w-contain mb-3">
                </div>
                <div class="p-4 pt-2 text-center">
                    <div class="mb-8">
                        <a href="#" class="text-gray-900 font-bold text-lg mb-2 hover:text-indigo-600 inline-block">Can
                            coffee make you a better developer?</a>
                        <p class="text-gray-700 text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid harum expedita sapiente debitis commodi autem deleniti illo laudantium ullam, voluptatem, recusandae fugit consequuntur saepe voluptas doloribus. Modi enim laboriosam nihil.</p>
                    </div>
                    <div class="flex items-center justify-center">
                        <a href="" class="text-base font-semibold text-white bg-yellow-300 py-3 px-8 mt-2 rounded-full hover:shadow-lg hover:bg-yellow-500 hover:text-slate-200 transition duration-300 ease-in-out">Selengkapnya</a>

                    </div>
                </div>
            </div>
    
        </div>
        <div class="flex flex-col items-center justify-center">
            {{-- <a href="" class="text-base font-semibold text-white bg-yellow-300 py-3 px-8 mt-2 rounded-full hover:shadow-lg hover:bg-yellow-500 hover:text-slate-200 transition duration-300 ease-in-out">Lihat Semua</a>
             --}}
             <a class="font-semibold hover:text-indigo-600 underline transition-all duration-300" href="">Berita Lainnya <i class="fa-solid fa-arrow-right"></i></a>

        </div>
        
    </div>
</section>


{{-- Visi Misi --}}
<section id="visi-misi" class="flex flex-row-reverse items-center bg-cover bg-center min-h-screen bg-slate-700" style="background-image: url('images/65ef0b371e821-tim-sub-sub-recipient-ssr-tbc-yayasan-mentari-sehat-indonesia-bersama-mahasiswa-magang-campus-leaders-program-clp-bakrie-center-foundation.jpg')">
    <div class="absolute inset-0 bg-black bg-opacity-50"></div>
    <div class="container relative z-10 mx-auto">
        <div class="flex flex-wrap text-center lg:text-start">
            <div class="w-full lg:w-full px-4 lg:ps-96 lg:pl-96">
                {{-- <h1 class="text-base font-semibold text-green-500"></h1> --}}
                <span class="block font-bold text-3xl lg:text-4xl text-white uppercase">Visi dan Misi Yayasan Mentari Sehat Indonesia</span>
                <h2 class="font-medium text-slate-400 mb-5 uppercase">Kabupaten Wonogiri</h2>
                <p class="font-bold italic text-slate-200 mb-10 leading-relaxed">Penggerak terwujudnya infrastruktur kesehatan non pemerintah dan dinamika kelompok sosial yang mampu secara mandiri menanggulangi masalah kesehatan, sosial, dan pendidikan di masyarakat.</p>
                <a href="{{ route('profil') }}" class="text-base font-semibold text-white bg-green-500 py-3 px-8 rounded-full hover:shadow-lg hover:bg-green-700 hover:text-slate-200 transition duration-300 ease-in-out">Tentang Kami</a>
            </div>
            {{-- <div class="w-full lg:w-1/2 px-4">
                
            </div> --}}
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


{{-- <section id="visi-misi" class="services section-bg bg-slate-200">
    <div class="flex flex-col min-h-screen items-center">

        <h2 class="text-3xl font-bold pt-8 uppercase">Visi dan Misi</h2>
        <h3 class="text-3l font-bold uppercase mb-4">Yayasan Mentari Sehat Indonesia</h3>
        <div class="flex gap-2">  
            <div class="flex-auto h-300">
                <img src="images/background home.jpg" alt="">
            </div>
            <div class="flex-auto w-64">
                <h3 class="text-3l font-bold uppercase text-center">Visi</h3>
                <p class="text-justify">Penggerak terwujudnya infrastruktur kesehatan non pemerintah dan dinamika kelompok sosial yang mampu secara mandiri menanggulangi masalah kesehatan, sosial, dan pendidikan di masyarakat.</p>
            </div>
        </div>
    </div>
  </section> --}}
@endsection