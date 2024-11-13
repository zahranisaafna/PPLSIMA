<?php

use Illuminate\Support\Facades\Route;


//Login Mahasiswa
Route::get('/', function () {
    return view('login', ['title' => 'Login']);
});

//Dashboard Mahasiswa
Route::get('/dashboard', function () {
    return view('dashboard', ['title' => 'Dashboard']);
});

//Notification Mahasiswa
//Akademik Mahasiswa
Route::get('/notification', function () {
    return view('notification', ['title' => 'Notification']);
});

//Registrasi Mahasiswa
Route::get('/registrasi', function () {
    return view('registrasi', ['title' => 'Registrasi']);
});

//Akademik Mahasiswa
Route::get('/akademik', function () {
    return view('akademik', ['title' => 'Akademik']);
});

//keluat page Mahasiswa
Route::get('/logout', function () {
    return view('logout', ['title' => 'Logout']);
});
