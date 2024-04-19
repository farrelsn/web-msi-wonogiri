<!DOCTYPE html>
<html lang="en" data-theme="light">
    @include('layouts.head')
<body class="font-poppins">

    {{-- Navbar --}}
    {{-- Include Navbar based on Route Group or Route Name --}}
    @if (request()->is('admin*'))
    {{-- Admin Navbar --}}
        @include('layouts.navbar_admin')
    @else
    {{-- Default Navbar --}}
        @include('layouts.navbar')
    @endif


    {{-- Content --}}
    @yield('content')

    @if (request()->is('admin*'))
        @include('layouts.sidebar')
    @endif

    
    @if (request()->is('admin*'))
    {{-- Admin Footer --}}
        @include('layouts.footer_admin')
    @else
    {{-- Default Footer --}}
        @include('layouts.footer')
    @endif

    {{-- @include('layouts.footer') --}}
    <script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();

                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html>