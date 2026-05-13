<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Route String Biasa
|--------------------------------------------------------------------------
*/

Route::get('/hello', function () {
    return 'Hello, World!';
});

Route::get('/profil', function () {
    return 'Ini adalah halaman profil';
});

Route::get('/kontak', function () {
    return 'Halaman kontak website';
});

/*
|--------------------------------------------------------------------------
| Route Dengan Parameter
|--------------------------------------------------------------------------
*/

Route::get('/user/{nama}', function ($nama) {
    return 'Selamat datang, ' . $nama;
});

Route::get('/matkul/{nama}/{kelas}', function ($nama, $kelas) {
    return 'Mata kuliah: ' . $nama . ', Kelas: ' . $kelas;
});