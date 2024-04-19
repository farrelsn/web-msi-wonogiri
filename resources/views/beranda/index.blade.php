<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- favicon --}}
    <link href="{{asset('images/msi-wonogiri.jpeg')}}" rel="icon">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> --}}
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> --}}
    {{-- <link rel="stylesheet" href="{{asset('assets/fontawesome-free-6.5.2-web/css/all.css')}}"> --}}
    {{-- <script defer src="{{asset('assets/fontawesome-free-6.5.2-web/js/fontawesome.js')}}"></script> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    @vite('resources/css/app.css')
</head>
<body>

    

<div class="navbar bg-dark fixed top-0 uppercase text-white p-8" id="navbar">
    <div class="navbar-start">
      <div class="dropdown">
        <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
        </div>
        <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52 text-black">
          <li><a href="{{route('home')}}">Beranda</a></li>
          <li>
            <a>Tentang MSI Wonogiri</a>
            <ul class="p-2 ">
              <li><a href="{{ route('profil') }}">Profil</a></li>
              <li><a href="{{ route('pengurus') }}">Pengurus</a></li>
            </ul>
          </li>
          <li><a>Item 3</a></li>
        </ul>
      </div>
      <a href="{{ route('home') }}"><img src="images/msi-wonogiri.png" alt="" style="width: 80px"></a>
    </div>
    <div class="navbar-center hidden lg:flex">
      <ul class="menu menu-horizontal px-1">
        <li><a href="{{route('home')}}" class="active">Beranda</a></li>
        <li>
          <details>
            <summary>Tentang MSI Wonogiri</summary>
            <ul class="p-2 text-black">
              <li><a href="{{ route('profil') }}">Profil</a></li>
              <li><a href="{{ route('pengurus') }}">Pengurus</a></li>
            </ul>
          </details>
        </li>
        <li><a href="{{ route('berita') }}">Berita & Kegiatan</a></li>
        <li><a href="{{ route('kontak-kami') }}">Kontak Kami</a></li>
      </ul>
    </div>
    <div class="navbar-end">
      <a href="{{ route('login') }}" class="btn btn-outline btn-accent uppercase">Login</a>
    </div>
</div>

<script>

    window.addEventListener('scroll', function() {
        var navbar = document.querySelector('#navbar');
        if(window.scrollY > 0) {
            // navbar.classList.add('p-4');
            navbar.classList.add('bg-white/50','text-black');
            // navbar.classList.add('bg-white');
            // navbar.style.background-color = "rgba(0, 0, 0, 0.5)"
            // navbar.classList.remove('bg-transparent','p-8');
            navbar.classList.remove('p-8','text-white', 'bg-transparent');
        } else {
            // navbar.classList.add('p-8');
            navbar.classList.add('bg-transparent','p-8','text-white');
            // navbar.style.background-color = "transparent";
            navbar.classList.remove('bg-white/50','text-black');
            // navbar.classList.remove('bg-slate-800','opacity-30');
            // navbar.classList.remove('p-4');
        } 
        // else {
          
        // }
    });
</script>
  
  
  
  

    <section id="home" class="pt-60 bg-cover bg-center min-h-screen font" style="background-image: url('images/high-quality-in-rainbows-desktop-background-v0-vvq3pmz35pea1.jpg')">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full self-center px-4">
                    <h1 class="text-base font-semibold text-green-500" >Selamat Datang di Website Resmi...</h1>
                    <span class="block font-bold text-4xl text-white uppercase">Yayasan Mentari Sehat Indonesia</span>
                    <h2 class="font-medium text-slate-400 mb-5 uppercase">Kabupaten Wonogiri</h2>
                    <p class=" font-bold italic text-slate-200 mb-10 leading-relaxed">“Segeralah Shalat agar hatimu tenang, Istighfarlah agar kecewamu hilang. Dan Berdoalah agar bahagiamu segera datang.”</p>
                    <a href="" class="text-base font-semibold text-white bg-green-500 py-3 px-8 rounded-full hover:shadow-lg hover:bg-green-300 transition duration-300 ease-in-out">Selengkapnya</a>
                </div>
                <div class="w-full self-end px-4">
                    
                </div>
            </div>
        </div>
    </section>
    
</body>
</html>