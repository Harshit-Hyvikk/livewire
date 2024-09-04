<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        @include('layouts.navigation')

        <div class="flex min-h-screen">
            <!-- Sidebar -->
            <aside class="w-64 bg-gray-800 text-white flex flex-col">
                <div class="h-16 flex items-center justify-center bg-gray-900 text-xl font-bold">
                    Sidebar
                </div>
                <nav class="flex-1 px-4 py-2 space-y-2">
                    <a href="#" class="block px-4 py-2 rounded hover:bg-gray-700">Dashboard</a>
                    <a href="#" class="block px-4 py-2 rounded hover:bg-gray-700">Profile</a>
                    <a href="#" class="block px-4 py-2 rounded hover:bg-gray-700">Settings</a>
                    <a href="#" class="block px-4 py-2 rounded hover:bg-gray-700">Logout</a>
                </nav>
            </aside>

            <!-- Main Content -->
            <div class="flex-1 bg-gray-100 p-6">
                <div class="max-w-7xl mx-auto">
                    <!-- Page Heading -->
                    @isset($header)
                        <header class="bg-white shadow">
                            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                                {{ $header }}
                            </div>
                        </header>
                    @endisset

                    <!-- Page Content -->
                    <main>
                        {{ $slot }}
                    </main>
                </div>
            </div>
        </div>


    </div>
</body>

</html>
