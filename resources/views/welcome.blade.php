<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title logo -->
    <link rel="icon" type="image/png" href="{{ asset('images/logo-posyandu.png') }}" />
    <title>Posyandu Bonisari</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <!-- Styles -->
    @vite(['resources/css/app.css'])
</head>
<body class="bg-cover bg-center bg-fixed min-h-screen flex flex-col" style="background-image: url('{{ asset('images/background.webp') }}');">
    <nav x-data="{ open: false }" class="bg-white bg-opacity-90 text-black py-4 px-6 mb-6 flex justify-between items-center">
        <div class="flex items-center">
            <img src="{{ asset('images/logo-posyandu.png') }}" alt="Logo Posyandu" class="h-12 mr-4">
            <div class="text-lg font-semibold">Posyandu App</div>
        </div>
        <div class="hidden sm:flex space-x-4">
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}" class="bg-blue-600 text-white px-3 py-2 rounded-md hover:bg-blue-500 transition">Dashboard</a>
                    <a href="{{ url('/profile') }}" class="bg-blue-600 text-white px-3 py-2 rounded-md hover:bg-blue-500 transition">Profile</a>
                @else
                    <a href="{{ route('login') }}" class="bg-blue-600 text-white px-3 py-2 rounded-md hover:bg-blue-500 transition">Log in</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="bg-blue-600 text-white px-3 py-2 rounded-md hover:bg-blue-500 transition">Register</a>
                    @endif
                @endauth
            @endif
        </div>
        <div class="-mr-2 flex sm:hidden">
            <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none transition">
                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path :class="{'hidden': open, 'inline-flex': !open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    <path :class="{'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>
    </nav>

    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden mb-6">
        <div class="px-2 pt-2 pb-3 space-y-1">
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}" class="block bg-blue-600 text-white px-3 py-2 rounded-md hover:bg-blue-500 transition">Dashboard</a>
                    <a href="{{ url('/profile') }}" class="block bg-blue-600 text-white px-3 py-2 rounded-md hover:bg-blue-500 transition">Profile</a>
                @else
                    <a href="{{ route('login') }}" class="block bg-blue-600 text-white px-3 py-2 rounded-md hover:bg-blue-500 transition">Log in</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="block bg-blue-600 text-white px-3 py-2 rounded-md hover:bg-blue-500 transition">Register</a>
                    @endif
                @endauth
            @endif
        </div>
    </div>

    <div class="container mx-auto px-6 py-12 flex-grow bg-black bg-opacity-90 rounded-lg text-white">
        <div class="hero flex flex-col lg:flex-row items-center justify-between space-y-8 lg:space-y-0 lg:space-x-8">
            <div class="hero-text max-w-lg">
                <h2 class="text-4xl font-bold mb-4">Posyandu Bonisari</h2>
                <p class="text-lg mb-6">Sistem Informasi Pendataan Layanan Kesehatan Posyandu Desa Bonisari</p>
                <a href="{{ route('dashboard') }}" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-500 transition">Mulai</a>
            </div>
            <img src="{{ asset('images/anak-sehat.webp') }}" alt="Health Image" class="w-full max-w-sm rounded-lg">
        </div>
    </div>
    <footer class="bg-white bg-opacity-90 text-black py-4 mt-6 flex items-center justify-center w-full">
        <p>© 2024 Universitas Muhammadiyah Tangerang</p>
    </footer>
</body>
</html>
