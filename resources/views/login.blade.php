<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <title>SIMA - Sistem Informasi Manajemen Akademik</title>
</head>
<body class="bg-gray-100">
    <div class="min-h-screen w-full flex items-center relative">
        <!-- Background Image dengan Overlay -->
        <div class="absolute inset-0">
            <img src="{{ asset('images/bglogin.png') }}" 
                 alt="Background" 
                 class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black/40"></div>
        </div>

        <!-- Main Content -->
        <div class="container mx-auto px-4 relative">
            <div class="flex justify-end">
                <div class="w-full max-w-md mr-8">
                    <div class="backdrop-blur-md bg-black/30 p-8 rounded-xl shadow-2xl">
                        <!-- Logo & Header -->
                        <div class="text-center mb-8">
                            <h1 class="text-2xl font-bold text-white">
                                Sistem Informasi Manajemen<br>
                                Akademik (SIMA)
                            </h1>
                            <p class="text-gray-200 mt-2 italic">
                                Universitas Diponegoro
                            </p>
                        </div>

                        <!-- Login Form -->
                        <form action="/" method="POST" class="space-y-6">
                            @csrf

                            <!-- NIM/Username Field -->
                            <div>
                                <div class="relative">
                                    <span class="absolute inset-y-0 left-0 pl-3 flex items-center">
                                        <img src="{{ asset('images/Personlogin.png') }}" 
                                             alt="User Icon" 
                                             class="w-5 h-5">
                                    </span>
                                    <input type="text"
                                           name="nim"
                                           placeholder="NIM/username/email official"
                                           class="w-full pl-10 pr-4 py-3 bg-white/10 border border-gray-400/30 rounded-lg text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-200"
                                           value="{{ old('nim') }}"
                                           required>
                                </div>
                                @error('nim')
                                    <p class="mt-1 text-red-400 text-sm">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Passwkeluarord Field -->
                            <div>
                                <div class="relative">
                                    <span class="absolute inset-y-0 left-0 pl-3 flex items-center">
                                        <img src="{{ asset('images/Unlocklogin.png') }}" 
                                             alt="Lock Icon" 
                                             class="w-5 h-5">
                                    </span>
                                    <input type="password"
                                           name="password"
                                           placeholder="Password"
                                           class="w-full pl-10 pr-4 py-3 bg-white/10 border border-gray-400/30 rounded-lg text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-200"
                                           required>
                                </div>
                                @error('password')
                                    <p class="mt-1 text-red-400 text-sm">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Login Button -->
                            <button type="submit"
                                    class="w-full bg-blue-600 text-white py-3 rounded-lg font-medium hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition duration-200">
                                Login
                            </button>

                            <!-- Forgot Password -->
                            <div class="text-center">
                                <a href="/logout" 
                                   class="text-red-400 hover:text-red-300 text-sm transition duration-200">
                                    Lupa password?
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Flash Messages -->
    @if(session('error'))
        <div x-data="{ show: true }"
             x-show="show"
             x-init="setTimeout(() => show = false, 3000)"
             class="fixed bottom-4 right-4 bg-red-500 text-white px-6 py-3 rounded-lg shadow-lg"
             role="alert">
            {{ session('error') }}
        </div>
    @endif
</body>
</html>