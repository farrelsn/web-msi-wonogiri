<div class="navbar fixed top-0 uppercase text-white p-8" id="navbar">
    <div class="navbar-start">
      <div class="dropdown">
        <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
        </div>
        <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52 text-black">
          <li><a href="#beranda">Beranda</a></li>
          <li>
            <a>Tentang MSI Wonogiri</a>
            <ul class="p-2 ">
              <li><a>Profil</a></li>
              <li><a>Pengurus</a></li>
            </ul>
          </li>
          <li><a>Item 3</a></li>
        </ul>
      </div>
      <a href="{{ route('home') }}"><img src="images/logo-msi.png" alt="" style="width: 120px"></a>
    </div>
    <div class="navbar-center hidden lg:flex">
      <ul class="menu menu-horizontal px-1">
        <li><a href="#beranda" class="active">Beranda</a></li>
        <li>
          <details>
            <summary>Tentang MSI Wonogiri</summary>
            <ul class="p-2 text-black">
              <li><a>Profil</a></li>
              <li><a>Pengurus</a></li>
            </ul>
          </details>
        </li>
        <li><a href="#berita">Berita & Kegiatan</a></li>
        <li><a href="#kontak-kami">Kontak Kami</a></li>
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
            // navbar.classList.add('bg-slate-800','opacity-30');
            navbar.classList.add('bg-slate-800/30');
            // navbar.style.background-color = "rgba(0, 0, 0, 0.5)"
            navbar.classList.remove('bg-transparent','p-8');
        } else {
            navbar.classList.add('bg-transparent','p-8');
            // navbar.style.background-color = "transparent";
            navbar.classList.remove('bg-slate-800/30');
            // navbar.classList.remove('bg-slate-800','opacity-30');
            // navbar.classList.remove('p-4');
        } 
        // else {
          
        // }
    });
</script>