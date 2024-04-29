@extends('layouts.main')

@section('content')
{{-- Login Page --}}

{{-- <section id="login-page" class="bg-cover" style="background-image:url('images/msi-tv-one.jpg')" >
    <div class="flex flex-col min-h-screen justify-center items-center text-black">
        <div class="card mt-4 bg-gray-800 bg-opacity-50 shadow-lg backdrop-blur-md" id="login-card" style="">
            <div class="card-title justify-center items-center">
                <img class="mt-6 mb-0" src="/images/msi-wonogiri.png" alt="Logo MSI" style="width: 180px">
            </div>
            <div class="card-body">
                <form action="{{ route('login.authenticate') }}" method="POST">
                    @csrf
                    <div class="sm:col-span-4">
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                              Username
                            </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-8 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" name="username" type="text" placeholder="Username">
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                              Password
                            </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-8 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" name="password" type="password" placeholder="Password">
                        </div>
                        <button class="btn btn-block btn-accent">Sign In</button>
                    </div>
                </form>
                
                @if ($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-8 py-3 rounded relative" role="alert">
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
    </div>
</section> --}}

{{-- Back button --}}

<div class="absolute top-5 left-10">
    <a href="{{ route('home') }}" class="btn btn-accent text-white">Kembali</a>
</div>

{{-- Login Page --}}
<div class="flex h-screen w-full items-center justify-center bg-gray-900 bg-cover bg-no-repeat overflow-y-hidden" style="background-image: url('images/profil-msi.jpeg')">
    <div class="rounded-xl bg-gray-800 bg-opacity-75 px-8 py-10 shadow-lg backdrop-blur-md max-sm:px-8">
      <div class="text-white">
        <div class="mb-8 flex flex-col items-center">
          <img src="{{ asset('/images/msi-wonogiri.png') }}" width="150" alt="" srcset="" />
          {{-- <h1 class="mb-2 text-2xl">Instagram</h1> --}}
          <span class="text-gray-300">Masuk ke Sistem sebagai Admin</span>
        </div>
        <form action="{{ route('login.authenticate') }}" method="POST">
            @csrf
          <div class="mb-4 text-lg">
            <input id="email" name="email" class="rounded-3xl border-none input-md bg-white bg-opacity-50 px-6 py-2 text-inherit placeholder-slate-200 placeholder-opacity-50 shadow-lg outline-none backdrop-blur-md" type="text" name="name" placeholder="Silahkan masukkan email" />
          </div>
  
          <div class="mb-4 text-lg">
            <input id="password" name="password" class="rounded-3xl border-none input-md bg-white bg-opacity-50 px-6 py-2 text-inherit placeholder-slate-200 placeholder-opacity-50 shadow-lg outline-none backdrop-blur-md" type="Password" name="name" placeholder="Silahkan masukkan password" />
          </div>
          <a class="ms-2 text-blue-500 hover:text-indigo-700 underline" href="{{route('lupa-password')}}">Lupa password?</a>
          <div class="mt-8 flex justify-center text-lg text-black">
            <button type="submit" class="rounded-3xl bg-green-400 bg-opacity-50 px-10 py-2 text-white shadow-xl backdrop-blur-md transition-colors duration-300 hover:bg-green-600">Login</button>
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