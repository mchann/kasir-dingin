<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" x-data="{ darkMode: localStorage.getItem('darkMode') === 'true' }" x-init="$watch('darkMode', value => localStorage.setItem('darkMode', value))" x-bind:class="{ 'dark': darkMode }">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" href="{{ asset('images/kasir.png') }}" type="image/x-icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-gray-100 dark:bg-gray-900 dark:text-black">
    <div class="min-h-screen flex">
        <!-- Sidebar -->
        @include('layouts.navbar')  <!-- Memanggil file navbar.blade.php -->

        <!-- Main Content -->
        <main class="flex-1 p-6">
            <div class="text-right mb-4">
              

                <!-- Toggle Dark Mode -->
                <button @click="darkMode = !darkMode" class="bg-gray-300 dark:bg-gray-700 text-black dark:text-white px-4 py-2 rounded">
                    <span x-show="!darkMode">🌞 Kasir</span>
                    <span x-show="darkMode">🌙 Dingin</span>
                </button>

                <!-- Tombol Logout -->
                @if (Auth::check())
                    <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                        @csrf
                        <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded ml-2">
                            Logout
                        </button>
                    </form>
                @endif
            </div>

            {{ $slot }}
        </main>
    </div>
</body>
</html>
