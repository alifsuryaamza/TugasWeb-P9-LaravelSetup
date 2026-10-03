<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $fitur = ['Routing simpel', 'Blade templating', 'Eloquent ORM', 'Artisan CLI'];
    return view('home', ['judul' => 'Belajar Laravel', 'fitur' => $fitur]);
});

Route::get('/about', function () {
    $profil = [
        'nama'   => 'Alif Surya Amza',
        'status' => 'Mahasiswa Universitas Negeri Medan',
        'matkul' => 'Pemrograman Web',
    ];
    return view('about', ['profil' => $profil]);
});

Route::get('/contact', [PageController::class, 'contact']);

Route::get('/hello/{nama}', [PageController::class, 'hello']);