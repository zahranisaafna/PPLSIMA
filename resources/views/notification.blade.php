<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    {{-- <!-- Content Dashboard -->
    <div class="p-6">
        <!-- Profile and Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 px-6 mb-6">
            <!-- Profile Card -->
            <div class="bg-[#F3FCF9] rounded-xl border-2 border-blue-500 overflow-hidden min-h-[280px]">
                <div class="relative h-full">
                    <!-- Background Design -->
                    <div class="h-1/2 bg-gradient-to-r from-cyan-400 to-blue-50 -skew-x-12 transform origin-top-left scale-110"></div>
                    
                    <!-- Profile Content -->
                    <div class="absolute inset-0 flex flex-col items-center justify-center">
                        <div class="w-32 h-32 rounded-full border-4 border-orange-400 overflow-hidden bg-white">
                            <img src="{{ asset('images/delta.png') }}" alt="Profile" class="w-full h-full object-cover"/>
                        </div>
                        <h2 class="mt-4 text-xl font-semibold">Delta Diandra</h2>
                        <p class="text-orange-500">2460122140187 S1 Informatika</p>
                    </div>
                </div>
            </div>

            <!-- Academic Stats Card -->
            <div class="bg-[#F3FCF9] rounded-xl border-2 border-blue-500 overflow-hidden min-h-[280px]">
                <!-- Top Section with Gradient -->
                <div class="relative h-1/3">
                    <div class="h-full bg-gradient-to-r from-cyan-400 to-blue-400 -skew-x-12 transform origin-top-left scale-110"></div>
                    <!-- Title Pill -->
                    <div class="absolute top-4 left-4">
                        <div class="bg-white px-6 py-2 rounded-full shadow-sm">
                            <span class="text-blue-600 font-semibold">Prestasi Akademik</span>
                        </div>
                    </div>
                </div>

                <!-- Stats Section -->
                <div class="bg-blue-800 h-2/3 flex items-center">
                    <div class="w-full px-12 flex items-center justify-between">
                        <!-- IPK -->
                        <div class="text-center flex-1">
                            <div class="text-6xl font-bold text-white mb-2">4.00</div>
                            <div class="text-sm text-gray-200">IPK</div>
                        </div>
                        
                        <!-- Divider -->
                        <div class="h-20 w-px bg-gray-400 mx-8"></div>
                        
                        <!-- SKS -->
                        <div class="text-center flex-1">
                            <div class="text-6xl font-bold text-white mb-2">90</div>
                            <div class="text-sm text-gray-200">SKS</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Academic Status Card -->
        <div class="bg-white rounded-xl border-2 border-blue-500 p-8 mx-6">
            <!-- Status Title -->
            <div class="mb-8">
                <div class="inline-block px-6 py-2 rounded-full border-2 border-orange-500">
                    <span class="text-orange-500 font-semibold">Status Akademik</span>
                </div>
            </div>

            <!-- Status Content -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-24 gap-y-8">
                <!-- Dosen Wali -->
                <div class="flex gap-4">
                    <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center shrink-0">
                        <img src="{{ asset('images/doswal.png') }}" alt="Dosen Icon" class="w-6 h-6">
                    </div>
                    <div>
                        <p class="text-gray-600">Dosen Wali:</p>
                        <p class="font-semibold text-lg">Dr. Sutikno, S.T.,</p>
                        <p class="text-gray-500 text-sm">(NIP: 197905242009121003)</p>
                    </div>
                </div>

                <!-- Semester Akademik -->
                <div class="flex gap-4">
                    <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center shrink-0">
                        <img src="{{ asset('images/jam.png') }}" alt="Calendar Icon" class="w-6 h-6">
                    </div>
                    <div>
                        <p class="text-gray-600">Semester Akademik Sekarang</p>
                        <p class="font-semibold text-lg">2024/2025 GANJIL</p>
                    </div>
                </div>

                <!-- Semester Studi -->
                <div class="flex gap-4">
                    <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center shrink-0">
                        <img src="{{ asset('images/sem.svg') }}" alt="Clock Icon" class="w-6 h-6">
                    </div>
                    <div>
                        <p class="text-gray-600">Semester Studi</p>
                        <p class="font-semibold text-lg">Semester Lima (5)</p>
                    </div>
                </div>

                <!-- Status Akademik -->
                <div class="flex gap-4">
                    <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center shrink-0">
                        <img src="{{ asset('images/statusaka.png') }}" alt="Status Icon" class="w-6 h-6">
                    </div>
                    <div>
                        <p class="text-gray-600">Status Akademik:</p>
                        <p class="text-red-500 font-semibold text-lg">Belum Aktif</p>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

</x-layout>

