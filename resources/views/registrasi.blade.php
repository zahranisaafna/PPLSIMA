<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="p-4">
        <h1 class="text-[#FF6B00] text-base font-medium mb-4">Pilih Status Akademik</h1>
        
        <!-- Status Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
            <!-- Aktif Card -->
            <div class="bg-white rounded-lg border border-gray-200 p-4">
                <div class="flex items-start justify-between">
                    <div class="flex gap-3">
                        <img src="{{ asset('images/imagecentang.png') }}" alt="Aktif" class="w-15 h-15"/>
                        <div>
                            <h4 class="text-base font-medium mb-1">Aktif</h4>
                            <p class="text-sm text-gray-600 leading-snug">
                                Akan belajar dan melakukan<br/>
                                registrasi perkuliahan<br/>
                                pada semester ini serta<br/>
                                mengisi Izin Keuangan<br/>
                                Studi (IKS)
                            </p>
                        </div>
                    </div>
                    <input type="radio" name="status" class="w-4 h-4 mt-1"/>
                </div>
            </div>

            <!-- Cuti Card -->
            <div class="bg-white rounded-lg border border-gray-200 p-4">
                <div class="flex items-start justify-between">
                    <div class="flex gap-3">
                        <img src="{{ asset('images/imagesilang.png') }}" alt="Cuti" class="w-15 h-15"/>
                        <div>
                            <h4 class="text-base font-medium mb-1">Cuti</h4>
                            <p class="text-sm text-gray-600 leading-snug">
                                Menghentikan kuliah<br/>
                                sementara untuk<br/>
                                semester ini tanpa<br/>
                                kehilangan status<br/>
                                sebagai mahasiswa<br/>
                                Undip
                            </p>
                        </div>
                    </div>
                    <input type="radio" name="status" class="w-4 h-4 mt-1"/>
                </div>
            </div>
        </div>

        <!-- Status Card -->
        <div class="bg-white rounded-lg border border-blue-500 p-4">
            <div class="mb-4">
                <div class="inline-block px-4 py-1.5 rounded-full border border-[#FF6B00]">
                    <span class="text-[#FF6B00] text-sm font-medium">Status Akademik</span>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <span class="text-sm font-medium">Status Akademik</span>
            </br><span class="text-sm text-red-500">Belum Aktif</span>
            </div>
        </div>
    </div>
</x-layout>