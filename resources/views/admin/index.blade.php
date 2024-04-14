@extends('layouts.main')

@section('content')
<div class="container px-12 min-h-screen" >
        @if ($success = Session::get('success'))
            <div role="alert" class="alert alert-success mt-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                <span>{{ $success }}</span>
                <button id="close"><i class="fa-solid fa-xmark float-end"></i></button>
            </div>

            <script>
                document.getElementById('close').addEventListener('click', function() {
                    this.parentElement.style.display = 'none';
                });
            </script>
        @endif
        {{-- Welcome --}}
        <div class="">
            <h1 class="text-3xl font-bold pt-8">Selamat Datang, Admin</h1>
            <div class="divider divider-warning"></div>
            {{-- <span class="loading loading-spinner text-warning"></span> --}}
        </div>
        
        {{-- Cards --}}
        <div class="grid grid-cols-1 gap-4 px-4 mt-8 sm:grid-cols-3 sm:px-8">
            <a href="{{route('admin.daftar-berita')}}" class="focus:border-blue-300 focus:ring focus:ring-blue-300  hover:scale-110 transition-all "><div class="flex items-center bg-white border rounded-sm overflow-hidden shadow">
                <div class="flex items-center justify-center bg-blue-400 p-6 text-white"><i class="fa-solid fa-newspaper fa-2x"></i></div>
                <div class="px-4 text-gray-700">
                    <h3 class="text-sm tracking-wider">Jumlah Berita</h3>
                    <p class="text-3xl">39,265</p>
                </div>
            </div></a>
            <a href="{{route('admin.daftar-pengurus')}}" class="focus:border-blue-300 focus:ring focus:ring-blue-300  hover:scale-110 transition-all "><div class="flex items-center bg-white border rounded-sm overflow-hidden shadow">
                <div class="flex items-center justify-center bg-green-400 p-6 text-white"><i class="fa-solid fa-user fa-2x"></i></div>
                <div class="px-4 text-gray-700">
                    <h3 class="text-sm tracking-wider">Jumlah Pengurus</h3>
                    <p class="text-3xl">39,265</p>
                </div>
            </div></a>
            <a href="{{route('admin.daftar-pesan')}}" class="focus:border-blue-300 focus:ring focus:ring-blue-300  hover:scale-110 transition-all "><div class="flex items-center bg-white border rounded-sm overflow-hidden shadow">
                <div class="flex items-center justify-center bg-red-400 p-6 text-white"><i class="fa-solid fa-message fa-2x"></i></div>
                <div class="px-4 text-gray-700">
                    <h3 class="text-sm tracking-wider">Jumlah Pesan</h3>
                    <p class="text-3xl">39,265</p>
                </div>
            </div></a>
            {{-- <div class="flex items-center bg-white border rounded-sm overflow-hidden shadow">
                <div class="p-4 bg-red-400"><svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-white" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4">
                        </path>
                    </svg></div>
                <div class="px-4 text-gray-700">
                    <h3 class="text-sm tracking-wider">Server Load</h3>
                    <p class="text-3xl">34.12%</p>
                </div>
            </div> --}}
        </div>
    </div>
@endsection