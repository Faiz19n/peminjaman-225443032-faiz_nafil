<?php
use App\Models\Category;
use App\Models\Item;
use App\Models\Loan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoanController;

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

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');



Route::resource('kategori', CategoryController::class)->except('show');

// Hanya untuk tamu (belum login)
Route::middleware('guest')->group(function () {
 Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
 Route::post('/login', [AuthController::class, 'login']);
 Route::get('/daftar', [AuthController::class, 'showRegister'])->name('daftar');
 Route::post('/daftar', [AuthController::class, 'register']);
 
});
// Wajib login
Route::middleware('auth')->group(function () {
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::resource('peminjaman', LoanController::class)->only(['index', 'create','store']);
//Route::get('/room', [RoomController::class, 'showRoom'])->name('room');

// Khusus admin
Route::middleware('admin')->group(function () {
Route::resource('kategori', CategoryController::class)->except('show');
Route::resource('alat', ItemController::class)->except(['index', 'show']);
Route::patch('/peminjaman/{peminjaman}/kembali', [LoanController::class,'kembalikan'])->name('peminjaman.kembali');

});
// Semua yang sudah login: melihat daftar alat
Route::get('/alat', [ItemController::class, 'index'])->name('alat.index');
});
