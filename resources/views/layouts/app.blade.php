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

    <link rel="stylesheet" href="{{ asset('assets/css/tailwind.css') }}">
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

    @include('admin.partials.preloader')
    <div class="flex h-screen overflow-hidden">
        {{-- @livewire('navigation-menu') --}}

        {{--
        <!-- Page Heading -->
        @if (isset($header))
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
        @endif --}}

        @include('admin.partials.sidebar')

        <div class="relative flex flex-1 flex-col overflow-y-auto overflow-x-hidden">

            @include('admin.partials.header')
            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>

        </div>
    </div>

    @stack('modals')

    <script src="{{ asset('assets/admin/src/js/index.js') }}"></script>
    <script src="{{ asset('assets/admin/src/js/us-aea-en.js') }}"></script>
    <script src="{{ asset('assets/admin/src/js/component/chart-01.js') }}"></script>
    <script src="{{ asset('assets/admin/src/js/component/chart-02.js') }}"></script>
    <script src="{{ asset('assets/admin/src/js/component/chart-03.jsa') }}"></script>
    @livewireScripts
</body>

</html>