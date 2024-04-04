@extends('layouts.main')

@section('content')
{{-- Login Page --}}
<section id="login-page" style="background-color: rgb(95, 95, 95)" >
    <div class="flex flex-col min-h-screen justify-center items-center text-black">
        <div class="card" id="login-card" style="background-color: rgb(255, 255, 255)">
            <div class="card-title justify-center items-center">
                {{-- <h1 class="text-3xl font-bold uppercase mt-4">Login</h1> --}}
                <img class="mt-4" src="/images/logo-msi.png" alt="Logo MSI" style="width: 200px">
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