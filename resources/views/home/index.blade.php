@extends('layouts.main')

@section('content')

{{-- Carousel --}}
<section id="beranda" >
    <div class="flex flex-col min-h-screen justify-center items-center text-white">
        <h2 class="text-3xl font-bold">Selamat datang di website...</h1>
        <h1 class="text-4xl font-bold mt-6 uppercase">Yayasan Mentari Sehat Indonesia</h1>
        <h3 class="text-4xl font-bold mt-2 uppercase">Kabupaten Wonogiri</h1>
        <a class="btn btn-outline btn-accent mt-4 uppercase" href="">Selengkapnya</a>
    </div>
    
</section>

<section id="berita">
    {{-- Berita --}} 
    <div class="text-center">
        <h1 class="text-3xl font-bold pt-8">Berita & Kegiatan</h1>
    </div>
    <div class="container mx-auto p-10 flex">

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
</section>

<section id="visi-misi" class="services section-bg">
    <div class="mx-auto p-10 flex">

      <div class="text-center">
        <h2 class="text-3xl font-bold  pt-8">VISI YAYASAN </h2>
        <h3 class="text-3l font-bold">MENTARI SEHAT INDONESIA</h3>
        <p>Penggerak terwujudnya infrastruktur kesehatan non pemerintah dan dinamika kelompok sosial yang mampu secara mandiri menanggulangi masalah kesehatan, sosial, dan pendidikan di masyarakat.</p>
        <a href="about-us" target="_blank" class="btn bg-slate-800 text-white mt-3 ">Selengkapnya</a>
      </div>

    </div>
  </section>
@endsection