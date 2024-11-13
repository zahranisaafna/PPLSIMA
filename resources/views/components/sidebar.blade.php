<!-- resources/views/components/sidebar.blade.php -->
@props(['isMobileMenuOpen' => false])

<aside 
    x-data
    class="w-64 min-h-screen bg-[#2C4158] fixed lg:relative transition-transform duration-300 ease-in-out z-40"
    :class="{'translate-x-0': isMobileMenuOpen, '-translate-x-full lg:translate-x-0': !isMobileMenuOpen}"
>
    <div class="h-full flex flex-col px-6 py-6">
        <!-- Logo -->
        <div class="flex items-center mb-8">
            <span class="text-white text-2xl font-bold">SIMA</span>
        </div>

        <!-- Navigation -->
        <nav class="flex-1 space-y-8">
            <!-- Home Section -->
            <div class="space-y-2">
                <h2 class="px-3 text-xs font-semibold text-gray-400 uppercase tracking-wider">
                    Home
                </h2>
                <div class="space-y-1">
                    <x-side-link 
                        href="/dashboard" 
                        :active="request()->is('dashboard')"
                    >
                        <img src="{{ asset('images/dash.png') }}" alt="Dashboard Icon" class="h-5 w-5 mr-2">
                        <span class="truncate">Dashboard</span>
                    </x-side-link>

                    <x-side-link 
                        href="/notification" 
                        :active="request()->is('notification')"
                    >
                        <img src="{{ asset('images/notificon.png') }}" alt="Notification Icon" class="h-5 w-5 mr-2">
                        <span class="truncate">Notifikasi</span>
                    </x-side-link>
                </div>
            </div>

            <!-- Data Section -->
            <div class="space-y-2">
                <h2 class="px-3 text-xs font-semibold text-gray-400 uppercase tracking-wider">
                    Data
                </h2>
                <div class="space-y-1">
                    <x-side-link 
                        href="/registrasi" 
                        :active="request()->is('registrasi')"
                    >
                        <img src="{{ asset('images/regis.png') }}" alt="Registrasi Icon" class="h-5 w-5 mr-2">
                        <span class="truncate">Registrasi</span>
                    </x-side-link>

                    <x-side-link 
                        href="/akademik" 
                        :active="request()->is('akademik')"
                    >
                        <img src="{{ asset('images/akademikicon.png') }}" alt="Akademik Icon" class="h-5 w-5 mr-2">
                        <span class="truncate">Akademik</span>
                    </x-side-link>
                </div>
            </div>
        </nav>

        <!-- Logout Button -->
        <div class="pt-6 border-t border-gray-700">
            <x-side-link 
                href="/logout"
                :active="request()->is('logout')"
            >
                <img src="{{ asset('images/logout.png') }}" alt="Logout Icon" class="h-5 w-5 mr-2">
                <span class="truncate">Keluar</span>
            </x-side-link>
        </div>
    </div>
</aside>