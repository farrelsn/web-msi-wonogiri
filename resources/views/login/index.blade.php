@extends('layouts.main')

@section('content')
{{-- Login Page --}}

<section id="login-page" class="bg-cover" style="background-image:url('images/msi-tv-one.jpg')" >
    {{-- <a href="/" class="btn btn-primary mb-3 position-absolute" style="top: 5%; left: 10%; margin-right: 10%;">Kembali</a> --}}
    <div class="flex flex-col min-h-screen justify-center items-center text-black">
        <div class="card mt-4" id="login-card" style="background-color: rgb(255, 255, 255)">
            <div class="card-title justify-center items-center">
                {{-- <h1 class="text-3xl font-bold uppercase mt-4">Login</h1> --}}
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
                
                {{-- errors --}}
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
</section>
@endsection