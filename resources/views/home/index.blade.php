@extends('layouts.main')

@section('content')

{{-- Hero --}}

<section class="flex justify-center items-center" id="beranda" style="min-height: 100vh">
    <div class="text-center text-white mt-4" >
        <h1 class="text-5xl font-bold mt-6 uppercase">Yayasan Mentari Sehat Indonesia</h1>
        <h3 class="text-4xl font-bold mt-2 uppercase">Kabupaten Wonogiri</h1>
            <div class="divider divider-warning"></div>
        <a class="btn btn-outline btn-accent mt-4 uppercase" href="#berita">Selengkapnya</a>
        {{-- <h1 class="text-2xl font-bold mt-6 uppercase">Yayasan Mentari Sehat Indonesia</h1>
        <h3 class="text-2xl font-bold mt-2 uppercase">Kabupaten Wonogiri</h1> --}}
    </div>
    
</section>

<section id="berita" class="flex justify-center items-center">
    {{-- Berita --}} 
    <div class="container mx-12">
        <div class="text-center">
            <h1 class="text-3xl font-bold pt-8 uppercase">Berita dan Kegiatan</h1>
        </div>
        <div class="container py-8 flex flex-wrap justify-between">
    
            <div class="card my-2 mx-2 w-96 bg-base-100 shadow-xl">
                <figure><img src="https://daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes" /></figure>
                <div class="card-body">
                <h2 class="card-title">Sepatu!</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, soluta magni, dicta optio quaerat sint vitae deserunt facere blanditiis eveniet nisi pariatur cum expedita aliquam reprehenderit? Nesciunt amet voluptates quas!</p>
                <div class="card-actions justify-end">
                    <button class="btn btn-primary">Buy Now</button>
                </div>
                </div>
            </div>
            <div class="card mx-2 w-96 bg-base-100 shadow-xl">
                <figure><img src="images/sata_andagi.jpg" alt="sata_andagi" /></figure>
                <div class="card-body">
                <h2 class="card-title">SATA ANDAGI!</h2>
                <p>SATA ANDAGI</p>
                <div class="card-actions justify-end">
                    <button class="btn btn-primary">Buy Now</button>
                </div>
                </div>
            </div>
            <div class="card mx-2 w-96 bg-base-100 shadow-xl">
                <figure><img src="https://daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes" /></figure>
                <div class="card-body">
                <h2 class="card-title">Sepatu!</h2>
                <p>If a dog chews shoes whose shoes does he choose?</p>
                <div class="card-actions justify-end">
                    <button class="btn btn-primary">Buy Now</button>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="visi-misi" class="services section-bg bg-slate-200">
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
  </section>
@endsection