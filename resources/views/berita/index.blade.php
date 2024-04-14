@extends('layouts.main')

@section('content')
    
{{-- <section id="beranda" style="min-height: 50vh">
    <div class="flex flex-col h-96 justify-center items-center text-white" >
        <h2 class="text-3xl font-bold">Berita & Kegatan</h1>
        <h1 class="text-4xl font-bold mt-6 uppercase">Yayasan Mentari Sehat Indonesia</h1>
        <h3 class="text-4xl font-bold mt-2 uppercase">Kabupaten Wonogiri</h1>
    </div>
    
</section> --}}

<section class="flex justify-center items-center" id="beranda" style="min-height: 50vh">
    <div class="text-center text-white mt-4" >
        <h2 class="text-5xl font-bold uppercase">Berita dan Kegiatan</h1>
            <div class="divider divider-warning"></div>
        {{-- <h1 class="text-2xl font-bold mt-6 uppercase">Yayasan Mentari Sehat Indonesia</h1>
        <h3 class="text-2xl font-bold mt-2 uppercase">Kabupaten Wonogiri</h1> --}}
    </div>
    
</section>

<section id="berita" class="flex justify-center items-center">
    {{-- Berita --}} 
    <div class="container mx-12">
        <div class="text-center">
            <h1 class="text-3xl font-bold pt-8">Berita & Kegiatan</h1>
            <div class="divider divider-warning"></div>
            <span class="loading loading-spinner text-warning"></span>
        </div>
        

        <div class="card size-full min-h-64 h-full bg-base-100 shadow-xl image-full bg-contain">
            <figure><img src="https://i.ytimg.com/vi/aCN4sKv9esM/hq720.jpg?sqp=-oaymwEcCNAFEJQDSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLBAxPClXZphdPz1xRDpp31kdntUpg" alt="Shoes" /></figure>
            <div class="card-body">
                <h2 class="card-title text-4xl">Minecraft but Donkey Kongs STEALS my DIAMONDS?!</h2>
                <p>AEUH!??</p>
                <div class="card-actions justify-end">
                    <a href="" class="btn btn-primary">Lihat Selengkapnya</a>
                </div>
            </div>
        </div>
        <div class="container py-8 flex flex-wrap justify-between">
    
            <div class="card m-2 w-96 bg-base-100 shadow-xl">
                <figure><img src="https://daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes" /></figure>
                <div class="card-body">
                <h2 class="card-title">Sepatu!</h2>
                <p>If a dog chews shoes whose shoes does he choose?</p>
                <div class="card-actions justify-end">
                    <button class="btn btn-primary">Buy Now</button>
                </div>
                </div>
            </div>
            <div class="card m-2 w-96 bg-base-100 shadow-xl">
                <figure><img src="images/sata_andagi.jpg" alt="sata_andagi" /></figure>
                <div class="card-body">
                <h2 class="card-title">SATA ANDAGI!</h2>
                <p>SATA ANDAGI</p>
                <div class="card-actions justify-end">
                    <button class="btn btn-primary">Buy Now</button>
                </div>
                </div>
            </div>
            <div class="card m-2 w-96 bg-base-100 shadow-xl">
                <figure><img src="https://daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes" /></figure>
                <div class="card-body">
                <h2 class="card-title">Sepatu!</h2>
                <p>If a dog chews shoes whose shoes does he choose?</p>
                <div class="card-actions justify-end">
                    <button class="btn btn-primary">Buy Now</button>
                </div>
                </div>
            </div>
            <div class="card m-2 w-96 bg-base-100 shadow-xl">
                <figure><img src="https://daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes" /></figure>
                <div class="card-body">
                <h2 class="card-title">Sepatu!</h2>
                <p>If a dog chews shoes whose shoes does he choose?</p>
                <div class="card-actions justify-end">
                    <button class="btn btn-primary">Buy Now</button>
                </div>
                </div>
            </div>
            <div class="card m-2 w-96 bg-base-100 shadow-xl">
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

@endsection