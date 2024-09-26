<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Toko Onlineku | Admin Dashboard</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body class="font-sans antialiased"
    x-data="{ page: 'analytics', 'loaded': true, 'darkMode': true, 'stickyMenu': false, 'sidebarToggle': false, 'scrollTop': false }"
    x-init="
         darkMode = JSON.parse(localStorage.getItem('darkMode'));
         $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"
    :class="{'dark text-bodydark bg-boxdark-2': darkMode === true}">
    <x-banner />

    {{-- Preloader --}}
    @include('admin.partials.preloader')

    <div class="flex h-screen overflow-hidden">
        {{-- Sidebar --}}
        @include('admin.partials.sidebar')

        {{-- Content area start --}}
        <div class="relative flex flex-1 flex-col overflow-y-auto overflow-x-hidden">

            @include('admin.partials.header')

            <div class="min-h-screen bg-gray-100">
                @livewire('navigation-menu')

                <!-- Main Content -->
                <main>
                    {{ $slot }}
                </main>
            </div>

        </div>
        {{-- End content area --}}
    </div>
    @stack('modals')

    @livewireScripts
</body>

</html>