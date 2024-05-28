

<div class="navbar fixed top-0 uppercase text-white p-8" id="navbar" style="z-index: 50">
    <div class="navbar-start">
      <div class="dropdown">
        <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
        </div>
        <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52 text-black">
          <li><a href="{{route('home')}}">Beranda</a></li>
          <li>
            <a>Tentang MSI Wonogiri</a>
            <ul class="p-2 ">
              <li><a href="{{ route('profil') }}">Tentang Kami</a></li>
              <li><a href="{{ route('pengurus') }}">Pengurus</a></li>
            </ul>
          </li>
          <li><a href="{{ route('berita') }}">Berita & Kegiatan</a></li>
          <li><a href="{{ route('kontak-kami') }}">Kontak Kami</a></li>
        </ul>
      </div>
      <a href="{{ route('home') }}"><img src="images/msi-wonogiri.png" class="w-16 lg:w-20" alt="" style=""></a>
    </div>
    <div class="navbar-center hidden lg:flex">
      <ul class="menu menu-horizontal px-1">
        <li><a href="{{route('home')}}">Beranda</a></li>
        <li>
          <details>
            <summary>Tentang MSI Wonogiri</summary>
            <ul class="p-2 text-black">
              <li><a href="{{ route('profil') }}">Tentang Kami</a></li>
              <li><a href="{{ route('pengurus') }}">Pengurus</a></li>
            </ul>
          </details>
        </li>
        <li><a href="{{ route('berita') }}">Berita & Kegiatan</a></li>
        <li><a href="{{ route('kontak-kami') }}">Kontak Kami</a></li>
      </ul>
    </div>
    <div class="navbar-end">
      <a href="{{ route('login') }}" class="text-xs md:text-sm lg:text-base font-semibold text-white bg-green-500 py-3 px-8 rounded-full hover:shadow-lg hover:bg-green-700 hover:text-slate-200 transition duration-300 ease-in-out">Login</a>
    </div>
</div>

<script>

    window.addEventListener('scroll', function() {
        var navbar = document.querySelector('#navbar');
        if(window.scrollY > 0) {
            // navbar.classList.add('p-4');
            // navbar.classList.add('bg-white/50','text-black');
            navbar.classList.add('bg-slate-700/50');
            // navbar.classList.add('bg-white');
            // navbar.style.background-color = "rgba(0, 0, 0, 0.5)"
            // navbar.classList.remove('bg-transparent','p-8');
            navbar.classList.remove('p-8', 'bg-transparent');
        } else {
            // navbar.classList.add('p-8');
            navbar.classList.add('bg-transparent','p-8','text-white');
            // navbar.style.background-color = "transparent";
            // navbar.classList.remove('bg-white/50','text-black');
            navbar.classList.remove('bg-slate-700/50');
            // navbar.classList.remove('bg-slate-800','opacity-30');
            // navbar.classList.remove('p-4');
        } 
        // else {
          
        // }
    });
</script>