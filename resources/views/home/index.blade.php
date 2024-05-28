@extends('layouts.main')

@section('content')

{{-- Hero --}}
<section id="home" class="flex items-center bg-cover bg-center min-h-screen z-30" style="background-image: url('images/msi-wonogiri-puskesmas.jpeg')">
    <div class="absolute inset-0 bg-black bg-opacity-50"></div>
    <div class="container relative z-30 mx-auto ">
        <div class="flex flex-wrap text-center lg:text-start">
            <div class="w-full lg:w-1/2 px-4">
                <h1 class="text-base font-semibold text-green-500">Selamat Datang di Website Resmi...</h1>
                <span class="block font-bold  text-3xl lg:text-4xl text-white uppercase">Yayasan Mentari Sehat Indonesia</span>
                <h2 class="font-medium text-slate-400 mb-5 uppercase">Kabupaten Wonogiri</h2>
                <p class="font-bold italic text-slate-200 mb-10 leading-relaxed">“Segeralah Shalat agar hatimu tenang, Istighfarlah agar kecewamu hilang. Dan Berdoalah agar bahagiamu segera datang.”</p>
                <a class="cursor-pointer text-base font-semibold text-white bg-green-500 py-3 px-8 rounded-full hover:shadow-lg hover:bg-green-700 hover:text-slate-200 transition duration-300 ease-in-out" id="btn-selengkapnya">Selengkapnya</a>
            </div>
            {{-- <div class="w-full lg:w-1/2 px-4">
                
            </div> --}}
        </div>
    </div>
</section>

@if($berita->count() > 0)
<section id="berita" class="py-8 min-h-screen z-20 bg-gray-100">
    <div class="container mx-auto ">
        <div class="w-fit mx-auto border-b-4 p-2 border-orange-500 text-center font-bold text-2xl md:text-3xl lg:text-4xl text-black uppercase">Berita & Kegiatan</div>
        <div class="p-2 text-center text-base md:text-lg text-gray-400">Kumpulan kegiatan terbaru yang dilaksanakan oleh MSI Kabupaten Wonogiri.</div>
        {{-- <div class="divider divider-warning font-bold"></div> --}}
        <div class="grid grid-cols-1 lg:grid-cols-3 sm:grid-cols-2 gap-10 lg:p-10">
            @foreach($berita as $b)
            <div
                class="border border-slate-400 lg:border-slate-400 bg-white rounded h-full  hover:drop-shadow-xl transition-all duration-300 flex flex-col justify-start leading-normal">
                <div class="h-80 w-full">
                    <img class="object-fill h-full w-full" src="{{ ($b->gambar == null) ? asset('foto_berita/empty.jpg') : (file_exists(asset('foto_berita/'.$b->gambar)) ?  asset('foto_berita/'.$b->gambar) : asset('foto_berita/empty.jpg'))  }}" class="w-contain mb-3">
                </div>
                <div class="p-4 pt-2 text-center ">
                    <div class="mb-8">
                        <a href="{{ route('berita.show',$b->id) }}" class="text-gray-900 font-bold text-lg mb-2 inline-block">{{ $b->judul }}</a>
                        <p class="text-gray-700 text-sm overflow-hidden">{{ Str::limit(strip_tags(Str::limit($b->isi, 200)),200 )}}</p>
                    </div>
                    <div class="flex items-center justify-center">
                        <a href="{{ route('berita.show',$b->id) }}" class="text-base font-semibold text-white bg-yellow-300 py-3 px-8 mt-2 rounded-full hover:shadow-lg hover:bg-yellow-500 hover:text-slate-200 transition duration-300 ease-in-out">Selengkapnya</a>

                    </div>
                </div>
            </div>
            @endforeach
    
        </div>
        <div class="flex flex-col items-center justify-center mt-4">
            {{-- <a href="" class="text-base font-semibold text-white bg-yellow-300 py-3 px-8 mt-2 rounded-full hover:shadow-lg hover:bg-yellow-500 hover:text-slate-200 transition duration-300 ease-in-out">Lihat Semua</a>
             --}}
             <a class="font-semibold hover:text-indigo-600 hover:translate-x-1 underline transition-all duration-300 " href="{{ route('berita') }}">Berita Lainnya <i class="fa-solid fa-arrow-right"></i></a>

        </div>
        
    </div>
</section>
@else
<section id="berita" class="py-8 min-h-screen z-20 bg-gray-100">
    <div class="container mx-auto ">
        <div class="w-fit mx-auto border-b-4 p-2 border-orange-500 text-center font-bold text-2xl md:text-3xl lg:text-4xl text-black uppercase">Berita & Kegiatan</div>
        <div class="p-2 text-center text-base md:text-lg text-gray-400">Kumpulan kegiatan terbaru yang dilaksanakan oleh MSI Kabupaten Wonogiri.</div>
        {{-- <div class="divider divider-warning font-bold"></div> --}}
    </div>
</section>
@endif


{{-- Visi Misi --}}
{{-- <section id="visi-misi" class="flex flex-row-reverse items-center bg-cover bg-center min-h-screen bg-slate-700" style="background-image: url('images/65ef0b371e821-tim-sub-sub-recipient-ssr-tbc-yayasan-mentari-sehat-indonesia-bersama-mahasiswa-magang-campus-leaders-program-clp-bakrie-center-foundation.jpg')">
    <div class="absolute inset-0 bg-black bg-opacity-50"></div>
    <div class="container relative z-10 mx-auto">
        <div class="flex flex-wrap text-center lg:text-start">
            <div class="w-full lg:w-full px-4 lg:ps-96 lg:pl-96">
                <span class="block font-bold text-3xl lg:text-4xl text-white uppercase">Visi dan Misi Yayasan Mentari Sehat Indonesia</span>
                <h2 class="font-medium text-slate-400 mb-5 uppercase">Kabupaten Wonogiri</h2>
                <p class="font-bold italic text-slate-200 mb-10 leading-relaxed">Penggerak terwujudnya infrastruktur kesehatan non pemerintah dan dinamika kelompok sosial yang mampu secara mandiri menanggulangi masalah kesehatan, sosial, dan pendidikan di masyarakat.</p>
                <a href="{{ route('profil') }}" class="text-base font-semibold text-white bg-green-500 py-3 px-8 rounded-full hover:shadow-lg hover:bg-green-700 hover:text-slate-200 transition duration-300 ease-in-out">Tentang Kami</a>
            </div>
        </div>
    </div>
</section> --}}


<section id="visi-misi" class="flex flex-row items-center justify-between bg-cover bg-center min-h-screen bg-green-600" style="background-image: url('images/65ef0b371e821-tim-sub-sub-recipient-ssr-tbc-yayasan-mentari-sehat-indonesia-bersama-mahasiswa-magang-campus-leaders-program-clp-bakrie-center-foundation.jpg')">
    <div class="absolute inset-0 bg-black bg-opacity-50"></div>
    <div class="h-full">
        {{-- <img class="w-1/2 h-fit" src="{{ asset('images/msi-wonogiri-gambar.jpg') }}" alt=""> --}}
    </div>
    <div class="container relative z-10 ">
        <div class="flex flex-wrap text-center lg:text-start">
            <div class="w-full lg:w-full px-4 lg:ps-96 lg:pl-96">
                <span class="block font-bold text-2xl md:text-3xl lg:text-4xl text-white uppercase">Visi dan Misi Yayasan Mentari Sehat Indonesia</span>
                <h2 class="font-medium text-slate-400 text-sm md:text-base mb-5 uppercase">Kabupaten Wonogiri</h2>
                <p class="font-bold italic text-slate-200 text-sm md:text-base mb-10 leading-relaxed">Penggerak terwujudnya infrastruktur kesehatan non pemerintah dan dinamika kelompok sosial yang mampu secara mandiri menanggulangi masalah kesehatan, sosial, dan pendidikan di masyarakat.</p>
                <a href="{{ route('profil') }}" class="text-base font-semibold text-white bg-green-500 py-3 px-8 rounded-full hover:shadow-lg hover:bg-green-700 hover:text-slate-200 transition duration-300 ease-in-out">Tentang Kami<i class="ms-4 fa-solid fa-arrow-right-long"></i></a>
            </div>
        </div>
    </div>
</section>


{{-- <section id="visi-misi" class="py-8 min-h-screen  text-black bg-cover bg-center w-full  bg-green-500" style="
    /* background: rgb(34,197,94);
    background: linear-gradient(43deg, rgba(34,197,94,1) 31%, rgba(0,255,169,1) 100%);  */
    /* background: rgb(252,252,69);
    background: linear-gradient(196deg, rgba(252,252,69,1) 0%, rgba(34,197,94,1) 80%, rgba(34,197,197,1) 100%);  */
">
    <div class="container lg:flex">
        <div class="w-1/2 z-20 flex grow justify-center items-center mx-auto">
            <h1 class="w-fit border-b-4 p-2 border-orange-500 text-center  font-bold text-4xl uppercase">Visi & Misi</h1>
        </div>
        <div class="w-1/2 z-30 mx-auto">
            <div class="container relative flex flex-col items-center ">
                <div class="w-fit border-b-4 p-2 border-orange-500 text-center  font-bold text-3xl uppercase">Visi</div>
                <div class="p-2 text-center text-lg text-gray-700 bg-white mt-4 max-w-2xl rounded-md hover:scale-105 transition-all duration-300">
                    <p class="text-justify text-base p-4">Visi yayasan Mentari Sehat Indonesia adalah penggerak terwujudnya infrastruktur kesehatan non pemerintah dan dinamika kelompok sosial yang mampu secara mandiri menanggulangi masalah kesehatan, sosial, dan pendidikan di masyarakat. </p>
                </div>
            </div>
        </div>
        <div class="container relative flex flex-col items-center ">
            <div class="w-fit border-b-4 p-2 border-orange-500 text-center font-bold text-3xl uppercase mb-4">Misi</div>
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
    </div>
</section> --}}




{{-- Pengurus --}}
<section id="pengurus" class="py-8 bg-gray-100 min-h-screen">
    <div class="container mx-auto">
        <div class="w-fit mx-auto border-b-4 p-2 text-center lg:text-start border-orange-500 font-bold text-2xl md:text-3xl lg:text-4xl text-black uppercase">Pengurus</div>
        <div class="p-2 text-center text-base md:text-lg text-gray-400">Daftar pengurus SSR MSI Kabupaten Wonogiri.</div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 sm:grid-cols-2 gap-10 p-10">
        @if($pengurus->count() > 0)
            @foreach($pengurus as $p)
            <div class="flex flex-col items-center justify-center">

                <div class="h-72 w-72">
                    <img src="{{ ($p->foto == null) ? asset('foto_pengurus/562ebed9cd49b9a09baa35eddfe86b00.jpg') : asset('foto_pengurus/'.$p->foto) }}" class="object-fill h-full w-full rounded-full" alt="">
                </div>
                <div class="text-center pt-8">
                    <h3 class="font-bold text-xl text-black">{{ $p->nama }}</h3>
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

<script>
    var btnSelengkapnya = document.getElementById('btn-selengkapnya');
    var berita = document.getElementById('berita');
    btnSelengkapnya.addEventListener('click', function() {
        if(berita != null){
            window.location.href = "#berita";
        }
        else{
            window.location.href = "#visi-misi"
        }
    });
</script>
@endsection