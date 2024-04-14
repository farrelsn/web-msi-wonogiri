<div class="navbar bg-slate-700 text-white">
    <label id="sidebar-label" for="sidebar" class=" text-white font-bold py-2 px-4 rounded"><i class="fa-solid fa-bars"></i></label>
    <div class="flex-1">
      
        <a href="{{ route('admin') }}" class="btn btn-ghost text-sm lg:text-xl uppercase "><img class="rounded-full w-6 lg:w-10" src="{{asset('images/msi-wonogiri.jpeg')}}" alt="" style="">SSR MSI Kabupaten Wonogiri</a>
    </div>
    <div class="flex-none">
      <ul class="menu menu-horizontal px-1">
        {{-- <li><a href="{{route('logout')}}">Link</a></li> --}}
        <li>
          <details>
            <summary>
              Menu
            </summary>
            <ul class="p-2 bg-base-100 rounded-t-none text-black">
              <li><a>Edit Profil</a></li>
              <li><a href="{{route('logout')}}">Logout</a></li>
            </ul>
          </details>
        </li>
      </ul>
    </div>
</div>

<div class="drawer lg:drawer-open">
    <input id="sidebar" type="checkbox" class="drawer-toggle" />
    <div class="drawer-content flex flex-col items-center justify-center">
  
  <script>
    // window.addEventListener('click', function() {
    //   var sidebar = document.querySelector('#sidebar');
    //   var sidebarLabel = document.querySelector('#sidebar-label');
    //   if(sidebar.checked) {
    //     sidebarLabel.style.display = 'none';
    //   } else {
    //     sidebarLabel.style.display = 'block';
    //   }
    // });
  </script>
  
  