<!DOCTYPE html>
<html lang="en" data-theme="light">
    @include('layouts.head')
<body>

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

    @include('layouts.footer')
</body>
</html>