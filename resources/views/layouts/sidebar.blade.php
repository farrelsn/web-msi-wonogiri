
    
</div> 
<div class="drawer-side">
  <label for="sidebar" aria-label="close sidebar" class="drawer-overlay"></label> 
  <ul class="menu p-4 w-64 min-h-full bg-base-200 text-base-content">
    <!-- Sidebar content here -->
    <li class="my-1"><a href="{{ route('admin') }}" class="{{ ($title == "Dashboard") ? "sidebar-active" : "" }}"><i class="fa-solid fa-chart-line"></i> Dashboard</a></li>
    {{-- <div class="divider divider-dark m-0"></div> --}}
    <li class="my-1"><a href="{{ route('home') }}" target="_blank"><i class="fa-solid fa-up-right-from-square"></i>Lihat website</a></li>
    {{-- <div class="divider m-0"></div> --}}
    <li class="my-1"><a href="{{ route('admin.daftar-berita') }}" class="{{ ($title == "Daftar Berita & Kegiatan") ? "sidebar-active" : "" }}"><i class="fa-solid fa-newspaper"></i> Daftar Berita & Kegiatan</a></li>
    <li class="my-1"><a href="{{ route('admin.daftar-pengurus') }}" class="{{ ($title == "Daftar Pengurus") ? "sidebar-active" : "" }}"><i class="fa-solid fa-users"></i> Daftar Pengurus</a></li>
    <li class="my-1"><a href="{{ route('admin.daftar-pesan') }}" class="{{ ($title == "Daftar Pesan") ? "sidebar-active" : "" }}"><i class="fa-solid fa-message"></i> Daftar Pesan</a></li>
    <li class="my-1"><a href="{{ route('admin.edit-profil') }}" class="{{ ($title == "Pengaturan Profil") ? "sidebar-active" : "" }}"><i class="fa-solid fa-user"></i> Pengaturan Profil</a></li>
    <li class="my-1"><a href="{{ route('logout') }}" ><i class="fa-solid fa-right-from-bracket"></i> Logout</a></li>
</ul>

</div>
</div>