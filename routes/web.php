<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
})->name('homepage');

Route::get('/halamanbaru', function () {
 return view('halamanbaru');
})->name('halamanbaru');

Route::get('/tentang', function () {
 return view('tentang');
})->name('tentang');

Route::get('/profil', function () {
 return view('profil', [
 'nama' => 'Faiz Nafil',
 'nim' => '225443032',
 'kelas' => '2AEC2',
 'prodi' => 'Teknik Informatika',
 'kampus' => 'Politeknik Manufaktur Bandung',
 'hobi' => 'Doomscrolling',
 'alamat' => 'Detroit',
 ]);
})->name('profil');

Route::get('/alat', function () {
 $alat = [
 ['kode' => 'ALT-0001', 'nama' => 'Multimeter Digital', 'kategori' => 'Alat
Ukur', 'stok' => 5],
 ['kode' => 'ALT-0002', 'nama' => 'Osiloskop', 'kategori' => 'Alat
Ukur', 'stok' => 0],
 ['kode' => 'ALT-0003', 'nama' => 'Solder 40 Watt', 'kategori' => 'Alat
Solder', 'stok' => 8],
 ['kode' => 'ALT-0004', 'nama' => 'Arduino Uno', 'kategori' =>
'Mikrokontroler', 'stok' => 12],
 ['kode' => 'ALT-0005', 'nama' => 'Tang Potong', 'kategori' =>
'Perkakas', 'stok' => 3],
 ];
 return view('alat', ['alat' => $alat]);
})->name('alat');


Route::get('/latihan-blade', function () {
 return view('latihan-blade', [
 'nilai' => 50,
 'hobi' => ['Membaca', 'Bermain futsal', 'Ngoding'],
 'kosong' => [],
 'catatan' => '<b>Teks ini tebal</b>',
 ]);
})->name('latihan-blade');

Route::get('/nav', function () {
 return view('nav');
})->name('nav');

Route::get('/dashboard', function () {
 return view('dashboard');
})->name('dashboard');
