<!DOCTYPE html>
<html class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIMA - Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="h-full" x-data="{ isMobileMenuOpen: false }">
    <div class="min-h-screen bg-gray-100">
        <!-- Mobile menu button -->
        <div class="fixed top-4 left-4 z-50 lg:hidden">
            <button @click="isMobileMenuOpen = !isMobileMenuOpen" 
                    class="p-2 rounded-md text-gray-400 hover:bg-[#2C4158] hover:text-white focus:outline-none">
                <svg class="h-6 w-6" x-show="!isMobileMenuOpen" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
                <svg class="h-6 w-6" x-show="isMobileMenuOpen" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>

        <div class="flex">
            <x-sidebar></x-sidebar>


            <!-- Main Content Area -->
            <div class="flex-1">
                <x-header>{{ $title }}</x-header>
            



            <!-- Main Content -->
            <main class="flex-1">
                {{ $slot }}
            </main>
        </div>
    </div>
</body>
</html>