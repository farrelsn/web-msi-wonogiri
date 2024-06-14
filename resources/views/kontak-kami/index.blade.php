@extends('layouts.main')

@section('content')

@if ($success = Session::get('success'))
    {{-- <div class="fixed top-10 z-50 inset-x-0 mx-4">
        <div role="alert" class="items-center mx-auto alert alert-success " style="margin-right: 1rem">
            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6 float-start" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            <span class="ms-2">Pesan berhasil dikirim</span>
            <button id="close" class="float-end"><i class="fa-solid fa-xmark"></i></button>
        </div>
    </div> --}}

    <div class="fixed top-10 z-50 inset-x-0 mx-4">
        <div role="alert" class="flex items-center mx-auto alert alert-success" style="margin-right: 1rem;">
            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current h-6 w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            <span class="ms-2 flex-grow">Pesan berhasil dikirim</span>
            <button id="close" class="flex-shrink-0"><i class="fa-solid fa-xmark"></i></button>
        </div>
    </div>
    

    <script>
        document.getElementById('close').addEventListener('click', function() {
            this.parentElement.style.display = 'none';
        });
    </script>
@endif
    
<section class="flex items-center bg-cover bg-center" id="beranda" style="min-height: 50vh; background-image:url({{asset('images/validasi-data.jpeg')}})">
    <div class="absolute inset-0 bg-black bg-opacity-50"></div>
    <div class="container relative z-10 mx-auto text-center text-white uppercase mt-6">
        <h2 class="w-fit mx-auto text-center font-bold text-3xl md:text-4xl lg:text-5xl ">Kontak Kami</h1>
        <nav class="w-full mt-2 rounded-md text-xs md:text-sm lg:text-base flex items-center justify-center">
            <ol class="list-reset flex">
              <li>
                <a href="{{route('home')}}">Beranda</a>
              </li>
              <li>
                <span class="mx-2">/</span>
              </li>
              <li class="active">Kontak Kami</li>
            </ol>
          </nav>
    </div>
</section>

<section id="kontak-kami" class="min-h-screen">

    <div class="container px-5 py-8 mx-auto flex sm:flex-nowrap flex-wrap">
        <div
            class="lg:w-2/3 md:w-1/2 bg-gray-300 rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative">
            <iframe width="100%" height="100%" class="absolute inset-0" frameborder="0" title="map" marginheight="0"
                marginwidth="0" scrolling="no"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.7126686174433!2d110.91634697406802!3d-7.820207177661149!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a2e3acb104449%3A0x945b99c4b08f3503!2s5WH9%2BWH7%2C%20Cubluk%2C%20Giritirto%2C%20Kec.%20Wonogiri%2C%20Kabupaten%20Wonogiri%2C%20Jawa%20Tengah!5e0!3m2!1sen!2sid!4v1718336321216!5m2!1sen!2sid"
                style=""
                loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div class="bg-white relative flex flex-wrap py-6 rounded shadow-md ">
                <div class="lg:w-1/2 px-6">
                    <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs uppercase">Alamat</h2>
                    <p class="mt-1 text-xs md:text-sm xl:text-base">Cubluk, RT.02/RW.04, Sukorejo, Giritirto, Kec. Wonogiri, Kab. Wonogiri, Jawa Tengah 57611</p>
                </div>
                <div class="lg:w-1/2 px-6 mt-4 lg:mt-0">
                    <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs uppercase">Email</h2>
                    <a class="leading-relaxed text-xs md:text-sm xl:text-base">ssr.msikabwonogiri@gmail.com</a>
                    <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs mt-4 uppercase">Nomor telepon</h2>
                    <p class="leading-relaxed text-xs md:text-sm xl:text-base">+62 857-2975-1215</p>
                </div>
            </div>
        </div>
        <div class="lg:w-1/3 md:w-1/2 bg-white flex flex-col md:ml-auto w-full md:py-8 mt-8 md:mt-0">
            <h2 class="text-gray-900 text-lg mb-1 font-medium title-font uppercase">Kontak Kami</h2>
            <p class="leading-relaxed mb-5 text-gray-600">Silahkan kirim pesan ke SSR MSI Kabupaten Wonogiri
            </p>
            <form action="{{ route('kontak-kami.store') }}" method="POST">
                @csrf
            <div class="relative mb-4">
                <label for="nama" class="leading-7 text-sm text-gray-600">Nama</label>
                <input type="text" id="nama" name="nama" class="w-full bg-white rounded border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-red-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <div class="relative mb-4">
                <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                <input type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-red-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <div class="relative mb-4">
                <label for="pesan" class="leading-7 text-sm text-gray-600">Pesan</label>
                <textarea id="pesan" name="pesan" class="w-full bg-white rounded border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-red-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
            </div>
            <button class="text-white bg-green-500 border-0 py-2 px-6 focus:outline-none hover:bg-green-700 duration-300 ease-in-out rounded text-lg" type="submit">Kirim Pesan</button>
            {{-- <p class="text-xs text-gray-500 mt-3">Chicharrones blog helvetica normcore iceland tousled brook viral
                artisan.</p> --}}
            </form>
        </div>
    </div>
</section>


{{-- <section id="kontak-kami" style="">
    <div class="flex min-h-screen w-full justify-center">
        <div class="flex flex-col bg-white w-full p-8 text-black space-y-6 justify-between">
            <div class="flex flex-col space-y-2">
                <h1 class="w-fit mx-auto border-b-4 p-2 border-orange-500 text-start font-bold text-3xl text-slate-800 uppercase">Kontak Kami</h1>
                <p class="pt-2 text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque, amet vel minus facere dolorem earum porro tenetur, labore nobis doloribus ipsa quod voluptatibus fuga aut odit iste sint expedita modi.
                Vitae, blanditiis molestias magnam, minima hic vel cum consequatur, omnis perferendis debitis nobis officiis recusandae tenetur accusantium? Facere cumque necessitatibus beatae obcaecati, ducimus alias expedita, quas voluptatum facilis quis velit.
                Voluptatem laborum quidem, quaerat, quod itaque suscipit ut soluta natus officiis fugit neque molestiae qui eveniet doloremque possimus consectetur labore blanditiis officia error magnam excepturi. Optio dicta dolor dolores dignissimos.</p>
            </div>
            <div class="flex flex-col space-y-6">
                <div class="inline-flex space-x-2 items-center">
                    <ion-icon name="call" class="text-gray-600 text-xl"></ion-icon>
                    <span>+62 123-213-231</span>
                </div>
                <div class="inline-flex space-x-2 items-center">
                    <ion-icon name="mail" class="text-gray-600 text-xl"></ion-icon>
                    <span>msi@gmail.com</span>
                </div>
                <div class="inline-flex space-x-2 items-center">
                    <ion-icon name="location" class="text-gray-600 text-xl"></ion-icon>
                    <span>Jatirejo, Wonoboyo, Kec. Wonogiri, Kabupaten Wonogiri, Jawa Tengah 57615</span>
                </div>
            </div>
            <div class="bg-white rounded-xl shadow-xl p-8 text-gray-600 w-full">
                
                
                    <div>
                        <label for="nama" class="text-sm">Nama</label>
                        <input name="nama" type="text" id="nama" class="ring-1 ring-gray-300 w-full rounded-md px-4 py-2 mt-2 outline-none focus:ring-2 focus:ring-teal-300" placeholder="Nama" required>
                    </div>
                    <div>
                        <label for="email" class="text-sm">Email</label>
                        <input name="email" type="email" id="email" class="ring-1 ring-gray-300 w-full rounded-md px-4 py-2 mt-2 outline-none focus:ring-2 focus:ring-teal-300" placeholder="Email" required>
                    </div>
                    <div>
                        <label for="pesan" class="text-sm">Pesan</label>
                        <textarea name="pesan" id="pesan" cols="30" rows="5" class="ring-1 ring-gray-300 w-full rounded-md px-4 py-2 mt-2 outline-none focus:ring-2 focus:ring-teal-300" placeholder="Pesan" required></textarea>
                    </div>
                    <button class="btn btn-warning inline-block self-end" type="submit">Kirim Pesan</button>
                
            </div>
        </div>
    </div>
</section> --}}

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
@endsection