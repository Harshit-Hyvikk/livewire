<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <link rel="stylesheet" href="app.css"> --}}
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>{{ $title ?? 'Page Title' }}</title>
    @livewireStyles
</head>

<body>
    @include('layouts.navigation')
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <aside class=" w-48 bg-gray-800 text-white flex flex-col">
            <div class="h-16 flex items-center justify-center bg-gray-900 text-xl font-bold">
                Sidebar
            </div>
            @if (request()->routeIs(['Posts.index','Posts.create']))
                <nav class="flex-1  px-5 py-2 space-y-2 ">
                    <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                        <x-side-link :href="route('Posts.index')" :active="request()->routeIs('Posts.index')">
                            {{ __('All Posts') }}
                        </x-side-link>
                    </div>
                    <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                        <x-side-link :href="route('Posts.create')" :active="request()->routeIs('Posts.create')">
                            {{ __('Create Post') }}
                        </x-side-link>
                    </div>
                </nav>
            @endif
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

    {{-- {{ $slot }} --}}

    @livewireScripts

</body>

</html>
