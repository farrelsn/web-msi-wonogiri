@extends('layouts.main')

@section('content')
<div class="container px-12 min-h-screen" >
    <div class="">
        <h1 class="text-3xl font-bold pt-8">Daftar Pengurus</h1>
        <div class="divider divider-warning"></div>
    </div>
    <div class="">
        <h2 class="text-2xl my-2" >Total Pengurus: </h2>
    </div>
    {{-- Daftar Berita --}}
    <div class="overflow-x-auto border-solid mt-2">
        <table class="table">
          <!-- head -->
          <thead>
            <tr>
              <th></th>
              <th>Foto</th>
              <th>Nama</th>
              <th>Jabatan</th>
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