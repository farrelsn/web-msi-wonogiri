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
    @if ($error  = Session::get('error'))
        <div role="alert" class="alert alert-error mt-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
            <span>{{ $error }}</span>
            <button id="close"><i class="fa-solid fa-xmark float-end"></i></button>
        </div>
        <script>
            document.getElementById('close').addEventListener('click', function() {
                this.parentElement.style.display = 'none';
            });
        </script>
    @endif
    {{-- Daftar Berita --}}
    @if (count($pesan) != 0)
    <div class="">
        <h1 class="text-3xl font-bold pt-8">Daftar Pesan</h1>
        <div class="divider divider-warning"></div>
    </div>
    <div class="my-4 py-2">
        <h2 class="text-2xl" >Total Data Pesan: {{count($pesan)}}</h2>
    </div>
    <div class="overflow-x-auto border-solid mt-2">
        <table class="table">
          <!-- head -->
          <thead>
            <tr>
              <th></th>
              <th>Nama</th>
              <th>Email</th>
              <th>Pesan</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach($pesan as $p)
            <tr>
                <th>{{$loop->iteration}}</th>
                <td>{{$p->nama}}</td>
                <td>{{$p->email}}</td>
                <td>{!! $p->pesan !!}</td>
                <form onsubmit="return confirm('Apakah Anda Yakin ingin menghapus pesan ini?');" action="{{ route('admin.daftar-pesan.destroy', $p->id) }}" method="POST">
                    @csrf
                    <td><button type="submit" class="btn btn-error text-white">Hapus</button></td>
                </form>
            </tr>
            @endforeach
          </tbody>
        </table>
    </div>
    @else
    <div class="flex flex-col items-center justify-center h-screen">
        <img src="{{ asset('images/not_found.jpg') }}" alt="" style="width: 25%">
        <h2 class="text-xl mt-2 text-black">Data Tidak Ditemukan</h2>
        <h3 class="text-lg text-slate-400">Belum ada data pesan yang tersedia</h3>
    </div>
    @endif
</div>
@endsection