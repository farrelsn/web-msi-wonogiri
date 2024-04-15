@extends('layouts.main')

@section('content')
<div class="container px-12 min-h-screen" >
    <div class="">
        <h1 class="text-3xl font-bold pt-8">Daftar Berita & Kegiatan</h1>
        <div class="divider divider-warning"></div>
    </div>
    <div class="my-4 py-2">
        <h2 class="text-2xl" >Total Data Berita & Kegiatan: <a href="" class="btn btn-outline btn-xs sm:btn-sm md:btn-sm btn-primary text-white float-end">Tambah</a></h2>
        
    </div>
    {{-- Daftar Berita --}}
    <div class="overflow-x-auto border-solid mt-2">
        <table class="table">
          <!-- head -->
          <thead>
            <tr>
              <th></th>
              <th>Judul</th>
              <th>Deskripsi</th>
              <th>Gambar</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <!-- row 1 -->
            <tr>
              <th>1</th>
              <td>Cy Ganderton</td>
              <td>Quality Control Specialist</td>
              <td>Blue</td>
            </tr>
            <!-- row 2 -->
            <tr>
              <th>2</th>
              <td>Hart Hagerty</td>
              <td>Desktop Support Technician</td>
              <td>Purple</td>
            </tr>
            <!-- row 3 -->
            <tr>
              <th>3</th>
              <td>Brice Swyre</td>
              <td>Tax Accountant</td>
              <td>Red</td>
            </tr>
          </tbody>
        </table>
    </div>
</div>
@endsection