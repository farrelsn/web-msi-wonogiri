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
                <form action="{{ route('kontak-kami.store') }}" class="flex flex-col space-y-4" method="POST">
                    @csrf
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
                </form>
            </div>
        </div>
    </div>
</section>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
@endsection