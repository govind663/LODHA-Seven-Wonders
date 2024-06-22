<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <x-head />

    @stack('styles')
</head>

<body>

    <!-- Navbar Section Start -->
    <x-navbar />
    <!-- Navbar Section End -->

    <!-- Main Section Start -->
    @yield('content')
    <!-- Main Section End -->

    <!-- Footer Section Start -->
    <x-footer />
    <!-- Footer Section End -->

    <!-- Main JS  -->
    <x-main-js />

    {{-- Custom Js --}}
    @stack('scripts')

</body>

</html>
