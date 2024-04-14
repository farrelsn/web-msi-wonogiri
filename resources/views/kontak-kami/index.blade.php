@extends('layouts.main')

@section('content')
    
<section class="flex justify-center items-center" id="beranda" style="min-height: 50vh">
    <div class="text-center text-white w-96 mt-4" >
        <h2 class="text-5xl font-bold uppercase">Kontak Kami</h1>
            <div class="divider divider-warning"></div>
        {{-- <h1 class="text-2xl font-bold mt-6 uppercase">Yayasan Mentari Sehat Indonesia</h1>
        <h3 class="text-2xl font-bold mt-2 uppercase">Kabupaten Wonogiri</h1> --}}
    </div>
    
</section>

<section id="kontak-kami" style="">
    <div class="flex min-h-screen w-full justify-center">
        <div class="flex flex-col bg-white w-full p-8 text-black space-y-6 justify-between">
            <div class="flex flex-col space-y-2">
                <h1 class="text-4xl font-bold tracking-wide">Kontak Kami</h1>
                <div class="divider divider-warning"></div>
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
                <form action="" class="flex flex-col space-y-4">
                    <div>
                        <label for="nama" class="text-sm">Nama</label>
                        <input name="nama" type="text" id="nama" class="ring-1 ring-gray-300 w-full rounded-md px-4 py-2 mt-2 outline-none focus:ring-2 focus:ring-teal-300" placeholder="Nama">
                    </div>
                    <div>
                        <label for="email" class="text-sm">Email</label>
                        <input name="email" type="email" id="email" class="ring-1 ring-gray-300 w-full rounded-md px-4 py-2 mt-2 outline-none focus:ring-2 focus:ring-teal-300" placeholder="Email">
                    </div>
                    <div>
                        <label for="pesan" class="text-sm">Pesan</label>
                        <textarea name="pesan" id="pesan" cols="30" rows="5" class="ring-1 ring-gray-300 w-full rounded-md px-4 py-2 mt-2 outline-none focus:ring-2 focus:ring-teal-300" placeholder="Pesan"></textarea>
                    </div>
                    <button class="btn btn-warning inline-block self-end">Kirim Pesan</button>
                </form>
            </div>
        </div>
    </div>
</section>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
@endsection