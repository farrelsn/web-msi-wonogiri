<!DOCTYPE html>
<html lang="en" data-theme="light">
    @include('layouts.head')
<body>

    {{-- Navbar --}}
    @include('layouts.navbar')

    {{-- Content --}}
    @yield('content')
</body>
</html>