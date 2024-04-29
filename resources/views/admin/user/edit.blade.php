@extends('layouts.main')

@section('content')
@if ($success = Session::get('success'))
    <div class="absolute top-0 z-50 inset-x-0 mx-4">
        <div role="alert" class="alert alert-success mt-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
            <span class="ms-2 flex-grow">{{ $success }}</span>
            <button id="close"><i class="fa-solid fa-xmark float-end"></i></button>
        </div>
    </div>
    <script>
        document.getElementById('close').addEventListener('click', function() {
            this.parentElement.style.display = 'none';
        });
    </script>
@endif
@if ($error  = Session::get('error'))
    <div class="absolute top-0 z-50 inset-x-0 mx-4">
        <div role="alert" class="alert alert-error mt-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
            <span class="ms-2 flex-grow">{{ $error }}</span>
            <button id="close"><i class="fa-solid fa-xmark float-end"></i></button>
        </div>
    </div>
    <script>
        document.getElementById('close').addEventListener('click', function() {
            this.parentElement.style.display = 'none';
        });
    </script>
@endif

<div class="container px-12 min-h-screen" >
    {{-- Form Ubah Data Pengurus --}}
    <div class="bg-white rounded-xl shadow-xl p-8 w-full my-2">
        <div class="mt-2">
            <h2 class="text-2xl font-bold" >Ubah Alamat Email</h2>
            <div class="divider divider-warning m-0"></div>
        </div>
        <form action="{{ route('admin.edit-profil.update') }}" class="flex flex-col space-y-4  text-gray-600 " method="POST" enctype="multipart/form-data">
            @csrf
            {{-- Email --}}
            <div>
                <label for="email" class="text-sm">Email</label>
                <input value="{{ $user->email }}" name="email" type="text" id="email" class="form control input input-bordered w-full mt-2 hover:ring-2 ps-4" placeholder="Email" required>
                @error('email')
                    <span class="text-xs text-error">{{ $message }}</span>
                @enderror
            </div>
            <button class="btn btn-success inline-block self-end text-white" type="submit">Ubah Email</button>
        </form>
    </div>

    <div class="bg-white rounded-xl my-8 shadow-xl p-8 w-full">
        <div class="mt-2">
            <h2 class="text-2xl font-bold" >Ubah Password</h2>
            <div class="divider divider-warning m-0"></div>
        </div>
        <form action="{{ route('admin.edit-profil.update-password') }}" class="flex flex-col space-y-4  text-gray-600 " method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="password-lama" class="text-sm">Password Lama</label>
                <input value="" name="password-lama" type="password" id="password-lama" class="form control input input-bordered  w-full mt-2 hover:ring-2 ps-4" placeholder="Silahkan Masukkan Password Lama" required>
                @error('password-lama')
                    <span class="text-xs text-error">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="password-baru" class="text-sm">Password Baru</label>
                <input value="" name="password-baru" type="password" id="password-baru" class="form control input input-bordered  w-full mt-2 hover:ring-2 ps-4" placeholder="Silahkan Masukkan Password Baru" required>
                @error('password-baru')
                    <span class="text-xs text-error">{{ $message }}</span>
                @enderror
            </div>
            <button class="btn btn-success inline-block self-end text-white" type="submit">Ubah Password</button>
        </form>
    </div>
</div>
@endsection