@extends('layouts.main')

@section('content')
@if ($success = Session::get('success'))

    <div class="absolute top-0 z-50 inset-x-0 mx-4">
        <div role="alert" class="flex items-center mx-auto alert alert-success" style="margin-right: 1rem;">
            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
            <span class="ms-2 flex-grow">{{ $success }}</span>
            <button id="close" class="flex-shrink-0"><i class="fa-solid fa-xmark "></i></button>
        </div>
    </div>
    

    <script>
        document.getElementById('close').addEventListener('click', function() {
            this.parentElement.style.display = 'none';
        });
    </script>
@endif

<div class="container px-12 min-h-screen" >
        {{-- Welcome --}}
        <div class="">
            <h1 class="text-3xl font-bold pt-8">Selamat Datang, Admin</h1>
            <div class="divider divider-warning"></div>
            {{-- <span class="loading loading-spinner text-warning"></span> --}}
        </div>
        
        {{-- Cards --}}
        <div class="grid grid-cols-1 gap-4 px-4 mt-8 sm:grid-cols-3 sm:px-8">
            <a href="{{route('admin.daftar-berita')}}" class="focus:border-blue-300 focus:ring focus:ring-blue-300 hover:scale-110 transition-all "><div class="flex items-center bg-white border rounded-sm overflow-hidden shadow">
                <div class="flex items-center justify-center bg-blue-400 p-6 text-white"><i class="fa-solid fa-newspaper fa-2x"></i></div>
                <div class="px-4 text-gray-700">
                    <h3 class="text-sm tracking-wider">Jumlah Berita</h3>
                    <p class="text-3xl">{{ count($berita) }}</p>
                </div>
            </div></a>
            <a href="{{route('admin.daftar-pengurus')}}" class="focus:border-blue-300 focus:ring focus:ring-blue-300  hover:scale-110 transition-all "><div class="flex items-center bg-white border rounded-sm overflow-hidden shadow">
                <div class="flex items-center justify-center bg-green-400 p-6 text-white"><i class="fa-solid fa-user fa-2x"></i></div>
                <div class="px-4 text-gray-700">
                    <h3 class="text-sm tracking-wider">Jumlah Pengurus</h3>
                    <p class="text-3xl">{{ count($pengurus) }}</p>
                </div>
            </div></a>
            <a href="{{route('admin.daftar-pesan')}}" class="focus:border-blue-300 focus:ring focus:ring-blue-300  hover:scale-110 transition-all "><div class="flex items-center bg-white border rounded-sm overflow-hidden shadow">
                <div class="flex items-center justify-center bg-red-400 p-6 text-white"><i class="fa-solid fa-message fa-2x"></i></div>
                <div class="px-4 text-gray-700">
                    <h3 class="text-sm tracking-wider">Jumlah Pesan</h3>
                    <p class="text-3xl">{{ count($pesan) }}</p>
                </div>
            </div></a>
        </div>
    </div>
@endsection