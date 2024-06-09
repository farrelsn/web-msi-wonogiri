@extends('layouts.main')

@section('content')


<div class="absolute top-5 left-10">
    <a href="{{ route('home') }}" class="btn btn-accent text-white">Kembali</a>
</div>

{{-- Login Page --}}
<div class="flex h-screen w-full items-center justify-center bg-gray-900 bg-cover bg-no-repeat bg-center overflow-y-hidden" style="background-image: url({{asset('images/profil-msi.jpeg')}})">
    <div class="rounded-xl bg-gray-800 bg-opacity-75 px-8 py-10 shadow-lg backdrop-blur-md max-sm:px-8">
      <div class="text-white">
        <div class="mb-8 flex flex-col items-center">
          <img src="{{ asset('/images/msi-wonogiri.png') }}" width="150" alt="" srcset="" />
          {{-- <h1 class="mb-2 text-2xl">Instagram</h1> --}}
          {{-- <span class="text-gray-300">Masuk ke Sistem sebagai Admin</span> --}}
        </div>
        <form action="{{ route('login.authenticate') }}" method="POST">
            @csrf
          <div class="mb-4 text-lg">
            <input id="email" name="email" class="rounded-3xl border-none input-md bg-white bg-opacity-50 px-6 py-2 text-inherit placeholder-slate-200 placeholder-opacity-50 shadow-lg outline-none backdrop-blur-md" type="text" name="name" placeholder="Silahkan masukkan email" />
          </div>
  
          <div class="mb-4 text-lg">
            <input id="password" name="password" class="rounded-3xl border-none input-md bg-white bg-opacity-50 px-6 py-2 text-inherit placeholder-slate-200 placeholder-opacity-50 shadow-lg outline-none backdrop-blur-md" type="Password" name="name" placeholder="Silahkan masukkan password" />
          </div>
          <div class="mt-8 flex justify-center text-lg text-black">
            <button type="submit" class="rounded-3xl bg-green-400 bg-opacity-50 px-10 py-2 text-white shadow-xl backdrop-blur-md transition-colors duration-300 uppercase hover:bg-green-600">Login</button>
          </div>
        </form>
      </div>
      @if ($errors->any())
                <div class="bg-red-100 border bg-opacity-50 mt-4 border-red-400 text-red-700 px-8 py-3 rounded-md relative" role="alert">
                    <strong class="font-bold">Gagal masuk!</strong>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
        @endif
    </div>
  </div>
@endsection