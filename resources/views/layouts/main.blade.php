<!DOCTYPE html>
<html lang="en" data-theme="light" class="!scroll-smooth">
    @include('layouts.head')
<body class="font-poppins">

    {{-- Navbar --}}
    {{-- No navbar if it's the login page --}}
    @if (!request()->is('login','lupa-password'))
        {{-- Include Navbar based on Route Group or Route Name --}}
        @if (request()->is('admin*'))
        {{-- Admin Navbar --}}
            @include('layouts.navbar_admin')
        @else
        {{-- Default Navbar --}}
            @include('layouts.navbar')
        @endif
    @endif

    {{-- Content --}}
    @yield('content')

    @if (request()->is('admin*'))
        @include('layouts.sidebar')
    @endif

    
    @if (!request()->is('login','lupa-password'))
        @if (request()->is('admin*'))
        {{-- Admin Footer --}}
            @include('layouts.footer_admin')
        @else
        {{-- Default Footer --}}
            @include('layouts.footer')
        @endif
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

    <script src="{{@asset('js/script.js')}}"></script>
    
</body>
</html>