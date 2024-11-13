<!-- Menggunakan komponen layout utama -->
<x-layout>
    <!-- Mengatur judul halaman yang diterima dari variabel $title -->
    <x-slot:title>{{ $title }}</x-slot:title>
    <!-- Membuat div utama dengan data reaktif Alpine.js untuk modal, detail kursus, pencarian, dll. -->
        <div x-data="{ 
            showModal: false, // Kontrol untuk menampilkan/menghilangkan modal pencarian kursus
            showCourseDetails: false, // Kontrol untuk menampilkan detail kursus terpilih
            searchQuery: '', // Query untuk pencarian kursus
            selectedCourse: null, // Kursus yang dipilih untuk ditampilkan detailnya
            courses: [ // Daftar kursus yang ditampilkan pada UI
                { // Objek kursus dengan informasi detail
                    name: 'Keamanan dan Jaminan Informasi',
                    code: 'Wajib(KM2020)',
                     // icon: 'MTK.png', // Mengomentari baris ini dengan double slash
                    details: {
                        internationalName: 'Information Security and Assurance',
                        courseCode: 'KM2020',
                        curriculumCode: 'KM2020',
                        meetingType: 'Tatap muka',
                        learningUnit: 'Regular',
                        credits: '3',
                        semester: '5',
                        class: 'B',
                        room: 'E301',
                        startTime: '08:00',
                        endTime: '13:00'
                    }
                },
                {
                    name: 'Pembelajaran Mesin',
                    code: 'Wajib(KM2020)',
                     // icon: 'MTK.png', // Mengomentari baris ini dengan double slash
                    details: {
                        internationalName: 'Machine Learning',
                        courseCode: 'KM2020',
                        curriculumCode: 'KM2020',
                        meetingType: 'Tatap muka',
                        learningUnit: 'Regular',
                        credits: '2',
                        semester: '5',
                        class: 'C',
                        room: 'Lab AI',
                        startTime: '08:00',
                        endTime: '13:00'
                    }
                },
                {
                    name: 'Proyek Perangkat Lunak',
                    code: 'Wajib(KM2020)',
                     // icon: 'MTK.png', // Mengomentari baris ini dengan double slash
                    details: {
                        internationalName: 'Software Engineering Project',
                        courseCode: 'KM2020',
                        curriculumCode: 'KM2020',
                        meetingType: 'Tatap muka',
                        learningUnit: 'Regular',
                        credits: '3',
                        semester: '5',
                        class: 'A',
                        room: 'E302',
                        startTime: '08:00',
                        endTime: '13:00'
                    }
                }
            ]
        }" class="min-h-screen bg-gray-100">
            <!-- Main Navigation -->
            <div class="bg-white shadow">
                {{-- <div class="flex justify-between px-4">
                    <div class="flex-1 flex">
                        <!-- Link navigasi utama seperti Buat IRS, IRS, KHS, Transkrip -->
                        <a href="#" class="px-8 py-3 bg-[#1e40af] text-white font-medium">
                            Buat IRS
                        </a>
                        <!-- Link lainnya akan berubah warna saat hover -->
                        <a href="#" class="px-8 py-3 text-gray-700 hover:bg-blue-50">
                            IRS
                        </a>
                        <a href="#" class="px-8 py-3 text-gray-700 hover:bg-blue-50">
                            KHS
                        </a>
                        <a href="#" class="px-8 py-3 text-gray-700 hover:bg-blue-50">
                            Transkrip
                        </a>
                    </div>
                </div> --}}
                <div class="bg-blue-100 rounded-lg p-2 shadow-sm w-full max-w-6xl mx-auto">
                    <div class="flex justify-between px-4">
                        <a href="#" class="px-8 py-3 bg-blue-700 text-white font-medium rounded-md">Buat IRS</a>
                        <a href="#" class="px-8 py-3 text-gray-700 hover:bg-blue-200 rounded-md">IRS</a>
                        <a href="#" class="px-8 py-3 text-gray-700 hover:bg-blue-200 rounded-md">KHS</a>
                        <a href="#" class="px-8 py-3 text-gray-700 hover:bg-blue-200 rounded-md">Transkrip</a>
                    </div>
                </div>
                
                
                
            </div>
    
            <!-- Main Content -->
            <div class="flex flex-col lg:flex-row">
                <!-- Left Sidebar -->
                <div class="w-full lg:w-[350px] bg-white p-4 shadow-sm">
                    <!-- Student Info -->
                    <div class="bg-[#1e40af] text-white rounded-lg p-4 space-y-1.5">
                        <p class="text-sm">Nama : Delta Diandra</p>
                        <p class="text-sm">NIM : 2460122140187</p>
                        <p class="text-sm">Th.Ajaran : 2024/2025</p>
                        <p class="text-sm">Ganjil/Genap : Ganjil</p>
                        <p class="text-sm">Mata Kuliah : Semester 5</p>
                        <p class="text-sm">IPK(kumulatif) : 4.00</p>
                        <p class="text-sm">IPS(semester lalu) : 4.00</p>
                        <p class="text-sm">Max.Beban SKS (saat ini) : 21 sks</p>
                    </div>
    
                    <!-- Tombol untuk Menambahkan Mata Kuliah -->
                    <div class="relative mt-4">
                        <!-- Tombol untuk membuka modal pencarian kursus -->
                        <button @click="showModal = !showModal"
                                class="w-full bg-orange-500 hover:bg-orange-600 text-white px-4 py-2.5 rounded-lg flex items-center justify-center gap-2 transition-colors">
                            <!-- Ikon tambah (+) -->
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                                </svg>
                            Tambahkan Mata Kuliah
                        </button>
    
                        <!-- Dropdown untuk pencarian kursus yang muncul saat tombol di atas diklik -->
                        <div x-show="showModal" 
                             @click.away="showModal = false"
                             x-transition
                             class="absolute z-50 w-full mt-2 bg-white rounded-lg shadow-lg border border-gray-200">
                            <div class="p-4">
                                <div class="relative">
                                     <!-- Input untuk memasukkan query pencarian kursus -->
                                    <input type="text"
                                           x-model="searchQuery"
                                           placeholder="Cari mata kuliah..."
                                           class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500">
                                    <svg class="w-5 h-5 absolute right-3 top-2.5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                                    </svg>
                                </div>
                                <!-- Menampilkan daftar hasil pencarian kursus -->
                                <div class="mt-2 max-h-64 overflow-y-auto">
                                    <!-- Looping melalui daftar kursus yang sesuai dengan pencarian -->
                                    <template x-for="course in courses.filter(c => 
                                        c.name.toLowerCase().includes(searchQuery.toLowerCase()) ||
                                        c.code.toLowerCase().includes(searchQuery.toLowerCase())
                                    )" :key="course.name">
                                        <div class="py-2 px-3 hover:bg-gray-50 rounded-lg cursor-pointer">
                                            <div class="flex items-center gap-3">
                                                <!-- Ikon kursus -->
                                                <img src="/images/MTK.png"
                                                     :alt="course.name"
                                                     class="w-6 h-6">
                                                <div>
                                                    <p class="text-sm font-medium" x-text="course.name"></p>
                                                    <p class="text-xs text-gray-500" x-text="course.code"></p>
                                                </div>
                                            </div>
                                        </div>
                                    </template>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <!-- Tombol Refresh untuk memperbarui daftar -->
                    <button class="mt-4 flex items-center text-sm text-red-500 hover:text-red-600">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                        </svg>
                        Refresh
                    </button>
    
                    <!-- Daftar Mata Kuliah yang ditampilkan pada sidebar -->
                    <div class="mt-4">
                        <h3 class="text-sm font-medium mb-2">Mata Kuliah</h3>
                        <div class="space-y-2">
                            <template x-for="course in courses" :key="course.name">
                                <div class="bg-orange-500 text-white rounded-lg">
                                    <div class="p-3">
                                        <div class="flex items-center gap-3">
                                            <img src="/images/MTK.png"
                                                 :alt="course.name"
                                                 class="w-5 h-5">
                                            <div>
                                                <p class="text-sm" x-text="course.name"></p>
                                                <p class="text-xs opacity-80" x-text="course.code"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </template>
                        </div>
                    </div>
                </div>
    
                <!-- Tabel Jadwal -->
                <div class="flex-1 p-4">
                    <div class="bg-white rounded-lg shadow">
                        <!-- Tabel Jadwal Waktu dan Mata Kuliah -->
                        <div class="overflow-x-auto">
                            <table class="w-full">
                                <thead>
                                    <tr class="bg-[#1e40af] text-white">
                                        <!-- Header waktu dan hari pada tabel -->
                                        <th class="py-3 px-4 text-left border-r border-blue-600">Waktu</th>
                                        @foreach(['Senin', 'Senin', 'Senin', 'Senin', 'Senin'] as $day)
                                            <th class="py-3 px-4 text-center border-r last:border-r-0 border-blue-600">
                                                {{ $day }}
                                            </th>
                                        @endforeach
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Mengisi tabel dengan slot waktu dan mata kuliah pada waktu tertentu -->
                                    @foreach(['06.00', '07.00', '08.00', '09.00', '13.00', '17.00'] as $time)
                                        <tr class="border-b last:border-b-0">
                                            <td class="py-3 px-4 text-sm border-r">{{ $time }}</td>
                                            <!-- Loop untuk mengisi kolom hari -->
                                            @foreach(range(1, 5) as $col)
                                            <!-- Mengatur warna latar belakang setiap kolom bergantian -->
                                                <td class="p-1 border-r last:border-r-0 min-h-[80px] relative bg-{{ $loop->parent->iteration % 2 == 0 ? 'blue-50/50' : 'white' }}">
                                                    <!-- Menampilkan mata kuliah tertentu pada waktu dan hari tertentu -->
                                                    @if(($time === '08.00' && $col === 1) || 
                                                        ($time === '07.00' && $col === 3) || 
                                                        ($time === '13.00' && $col === 4) || 
                                                        ($time === '13.00' && $col === 5))
                                                        <!-- Menggunakan data reaktif Alpine.js untuk menampilkan modal detail kursus -->
                                                        <div x-data="{ showDetails: false }" class="h-full">
                                                             <!-- Tombol untuk membuka modal detail kursus -->
                                                            <button @click="showDetails = true; selectedCourse = courses[1]"
                                                                    class="w-full h-full bg-orange-500 text-white p-2 rounded hover:bg-orange-600 transition-colors text-left">
                                                                <!-- Nama dan waktu mata kuliah -->
                                                                <p class="text-sm font-medium">Pembelajaran Mesin</p>
                                                                <p class="text-xs">08.00 - 13.00 Kelas C (2 SKS)</p>
                                                            </button>
    
                                                            <!-- Modal Detail Mata Kuliah -->
                                                            <div x-show="showDetails" 
                                                                 @click.away="showDetails = false"
                                                                 class="fixed inset-0 z-50 flex items-center justify-center p-4"
                                                                 style="background-color: rgba(0,0,0,0.5);">
                                                                <div class="bg-white rounded-lg w-full max-w-md">
                                                                    <div class="p-6">
                                                                        <div class="flex items-start justify-between pb-3 border-b">
                                                                            <div class="flex items-center gap-3">
                                                                                <img src="/images/MTK.png"
                                                                                     alt="Machine Learning"
                                                                                     class="w-10 h-10">
                                                                                <div>
                                                                                    <h3 class="font-medium">Pembelajaran Mesin</h3>
                                                                                    <p class="text-sm text-gray-500">Machine Learning</p>
                                                                                </div>
                                                                            </div>
                                                                            <!-- Tombol untuk menutup modal -->
                                                                            <button @click="showDetails = false" 
                                                                                    class="text-gray-400 hover:text-gray-500">
                                                                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                                                                </svg>
                                                                            </button>
                                                                        </div>
                                                                        <!-- Menampilkan detail mata kuliah dalam modal -->
                                                                        <div class="mt-4 space-y-2">
                                                                            <template x-if="selectedCourse">
                                                                                <div class="space-y-2">
                                                                                    <!-- Detail setiap informasi mata kuliah, seperti kode, SKS, kelas, dll. -->
                                                                                    <div class="flex justify-between text-sm">
                                                                                        <span class="text-gray-500">Kode mata kuliah</span>
                                                                                        <span x-text="selectedCourse.details.courseCode"></span>
                                                                                    </div>
                                                                                    <div class="flex justify-between text-sm">
                                                                                        <span class="text-gray-500">Kode kurikulum</span>
                                                                                        <span x-text="selectedCourse.details.curriculumCode"></span>
                                                                                    </div>
                                                                                    <div class="flex justify-between text-sm">
                                                                                        <span class="text-gray-500">Jenis Pertemuan</span>
                                                                                        <span x-text="selectedCourse.details.meetingType"></span>
                                                                                    </div>
                                                                                    <div class="flex justify-between text-sm">
                                                                                        <span class="text-gray-500">SKS mata kuliah</span>
                                                                                        <span x-text="selectedCourse.details.credits"></span>
                                                                                    </div>
                                                                                    <div class="flex justify-between text-sm">
                                                                                        <span class="text-gray-500">Kelas</span>
                                                                                        <span x-text="selectedCourse.details.class"></span>
                                                                                    </div>
                                                                                    <div class="flex justify-between text-sm">
                                                                                        <span class="text-gray-500">Ruang</span>
                                                                                        <span x-text="selectedCourse.details.room"></span>
                                                                                    </div>
                                                                                    <div class="flex justify-between text-sm">
                                                                                        <span class="text-gray-500">Waktu mulai</span>
                                                                                        <span x-text="selectedCourse.details.startTime"></span>
                                                                                    </div>
                                                                                    <div class="flex justify-between text-sm">
                                                                                        <span class="text-gray-500">Waktu selesai</span>
                                                                                        <span x-text="selectedCourse.details.endTime"></span>
                                                                                    </div>
                                                                                </div>
                                                                            </template>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                </td>
                                            @endforeach
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
    
                    <!-- Tombol untuk mengirim data -->
                    <div class="mt-4">
                        <button class="px-8 py-2 bg-[#1e40af] text-white rounded hover:bg-blue-800 transition-colors">
                            Kirim
                        </button>
                    </div>
                </div>
            </div>
        </div>
         <!-- Menambahkan skrip JavaScript khusus untuk komponen Alpine.js -->
        @push('scripts')
        <script>
            // Inisialisasi data Alpine.js
            document.addEventListener('alpine:init', () => {
                Alpine.store('schedule', {
                    // Slot waktu dan hari yang digunakan dalam jadwal
                    timeSlots: ['06.00', '07.00', '08.00', '09.00', '13.00', '17.00'],
                    days: ['Senin', 'Senin', 'Senin', 'Senin', 'Senin'],
                    // Fungsi untuk mengecek apakah kelas dijadwalkan pada waktu tertentu
                    isClassScheduled(time, day) {
                        const schedules = {
                            '08.00': [1],
                            '07.00': [3],
                            '13.00': [4, 5]
                        };
                        // Mengembalikan true atau false tergantung apakah kelas dijadwalkan atau tidak
                        return schedules[time]?.includes(day) || false;
                    }
                });
            });
        </script>
        @endpush
    
    </x-layout>