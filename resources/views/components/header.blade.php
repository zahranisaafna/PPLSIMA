<!-- Top Navigation Bar -->
<nav class="bg-white shadow-sm relative z-50">
    <div class="max-w-full mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <h1 class="text-xl font-semibold text-gray-800">{{ $slot }}</h1>
            
            <!-- Profile Dropdown -->
            <div class="relative" x-data="{ isOpen: false }" @click.away="isOpen = false">
                <button @click="isOpen = !isOpen"
                        class="flex items-center space-x-2 focus:outline-none">
                    <div class="flex items-center">
                        <div class="relative w-10 h-10 border-2 border-orange-400 rounded-full">
                            <img src="{{ asset('images/delta.png') }}" 
                                 alt="Profile" 
                                 class="w-full h-full rounded-full object-cover"/>
                        </div>
                        <span class="ml-2 text-base font-medium">Delta Diandra</span>
                        <svg class="h-4 w-4 ml-1 text-gray-600 transition-transform duration-200"
                             :class="{ 'rotate-180': isOpen }"
                             fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </div>
                </button>

                <!-- Dropdown Menu -->
                <div x-show="isOpen"
                     x-transition:enter="transition ease-out duration-100"
                     x-transition:enter-start="transform opacity-0 scale-95"
                     x-transition:enter-end="transform opacity-100 scale-100"
                     x-transition:leave="transition ease-in duration-75"
                     x-transition:leave-start="transform opacity-100 scale-100"
                     x-transition:leave-end="transform opacity-0 scale-95"
                     class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg py-2"
                     style="display: none;">
                    <a href="/mhs-profile" 
                       class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50">
                        Profile
                    </a>
                    <a href="/logout"
                       class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50">
                        Keluar
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>