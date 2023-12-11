<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\ProgramKegiatanController;
use App\Http\Controllers\StrukturOrganisasiController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\JenisLayananController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Home2Controller;
use App\Http\Controllers\Home3Controller;
use App\Http\Controllers\PostController;

use App\Models\Dokter;
use App\Models\Fasilitas;
use App\Models\JenisLayanan;
use App\Models\Prestasi;
use App\Models\ProgramKegiatan;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/program-kegiatan', [HomeController::class, 'index']);
Route::get('/', [Home2Controller::class, 'index']);
Route::get('/pelayanan', [Home3Controller::class, 'index']);

Route::get('/detaildokter', function () {
    return view('detaildokter');
});



Route::get('/daftaronline', function () {
    return view('daftaronline');
});



Route::get('/jadwaldokter', function () {
    return view('jadwaldokter');
});

Route::get('/persetujuanumum', function () {
    return view('persetujuanumum');
});

Route::get('/footer', function () {
    return view('footer');
});



/* About Us */
Route::get('/tentangkami', function () {
    return view('aboutus');
});
/* Akhir */

/* Struktur Organisasi */
Route::get('/struktur-organisasi', [StrukturOrganisasiController::class, 'index']);
Route::get('/struktur-organisasi/create', [StrukturOrganisasiController::class, 'create']);
Route::post('/struktur-organisasi', [StrukturOrganisasiController::class, 'store']);
Route::get('/struktur-organisasi/{id}/edit', [StrukturOrganisasiController::class, 'edit']);
Route::put('/struktur-organisasi/{id}', [StrukturOrganisasiController::class, 'update']);
Route::delete('/struktur-organisasi/{id}', [StrukturOrganisasiController::class, 'destroy']);
/* Akhir */

/* Admin */
Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');

    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');

    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    /* Staff */
    Route::controller(StaffController::class)->prefix('staff')->group(function () {
        Route::get('', 'index')->name('staff');
        Route::get('create', 'create')->name('staff.create');
        Route::post('store', 'store')->name('staff.store');
        Route::get('show/{id}', 'show')->name('staff.show');
        Route::get('edit/{id}', 'edit')->name('staff.edit');
        Route::put('edit/{id}', 'update')->name('staff.update');
        Route::delete('destroy/{id}', 'destroy')->name('staff.destroy');
    });
    /* Akhir */

    /* Prestasi */
    Route::controller(PrestasiController::class)->prefix('prestasi')->group(function () {
        Route::get('', 'index')->name('prestasi');
        Route::get('create', 'create')->name('prestasi.create');
        Route::post('store', 'store')->name('prestasi.store');
        Route::get('show/{id}', 'show')->name('prestasi.show');
        Route::get('edit/{id}', 'edit')->name('prestasi.edit');
        Route::put('edit/{id}', 'update')->name('prestasi.update');
        Route::delete('destroy/{id}', 'destroy')->name('prestasi.destroy');
    });
    /* Akhir */

    /* Dokter  */
    Route::controller(DokterController::class)->prefix('dokter')->group(function () {
        Route::get('', 'index')->name('dokter');
        Route::get('create', 'create')->name('dokter.create');
        Route::post('store', 'store')->name('dokter.store');
        Route::get('show/{id}', 'show')->name('dokter.show');
        Route::get('edit/{id}', 'edit')->name('dokter.edit');
        Route::put('edit/{id}', 'update')->name('dokter.update');
        Route::delete('destroy/{id}', 'destroy')->name('dokter.destroy');
    });
    /* Akhir */

    /* Pasien  */
    Route::controller(PasienController::class)->prefix('pasien')->group(function () {
        Route::get('', 'index')->name('pasien');
        Route::get('create', 'create')->name('pasien.create');
        Route::post('store', 'store')->name('pasien.store');
        Route::get('show/{id}', 'show')->name('pasien.show');
        Route::get('edit/{id}', 'edit')->name('pasien.edit');
        Route::put('edit/{id}', 'update')->name('pasien.update');
        Route::delete('destroy/{id}', 'destroy')->name('pasien.destroy');
    });
    /* Akhir */

    /* Jenis Layanan  */
    Route::controller(JenisLayananController::class)->prefix('jenislayanan')->group(function () {
        Route::get('', 'index')->name('jenislayanan');
        Route::get('create', 'create')->name('jenislayanan.create');
        Route::post('store', 'store')->name('jenislayanan.store');
        Route::get('show/{id}', 'show')->name('jenislayanan.show');
        Route::get('edit/{id}', 'edit')->name('jenislayanan.edit');
        Route::put('edit/{id}', 'update')->name('jenislayanan.update');
        Route::delete('destroy/{id}', 'destroy')->name('jenislayanan.destroy');
    });
    /* Akhir */

    /* Program Kegiatan  */
    Route::controller(ProgramKegiatanController::class)->prefix('programkegiatan')->group(function () {
        Route::get('', 'index')->name('programkegiatan');
        Route::get('create', 'create')->name('programkegiatan.create');
        Route::post('store', 'store')->name('programkegiatan.store');
        Route::get('show/{id}', 'show')->name('programkegiatan.show');
        Route::get('edit/{id}', 'edit')->name('programkegiatan.edit');
        Route::put('edit/{id}', 'update')->name('programkegiatan.update');
        Route::delete('destroy/{id}', 'destroy')->name('programkegiatan.destroy');
    });
    /* Akhir */

    /* Fasilitas  */
    Route::controller(FasilitasController::class)->prefix('fasilitas')->group(function () {
        Route::get('', 'index')->name('fasilitas');
        Route::get('create', 'create')->name('fasilitas.create');
        Route::post('store', 'store')->name('fasilitas.store');
        Route::get('show/{id}', 'show')->name('fasilitas.show');
        Route::get('edit/{id}', 'edit')->name('fasilitas.edit');
        Route::put('edit/{id}', 'update')->name('fasilitas.update');
        Route::delete('destroy/{id}', 'destroy')->name('fasilitas.destroy');
    });
    /* Akhir */
    /* Post  */
    Route::controller(PostController::class)->prefix('post')->group(function () {
        Route::get('', 'index')->name('post');
        Route::get('create', 'create')->name('post.create');
        Route::post('store', 'store')->name('post.store');
        Route::get('show/{id}', 'show')->name('post.show');
        Route::get('edit/{id}', 'edit')->name('post.edit');
        Route::put('edit/{id}', 'update')->name('post.update');
        Route::delete('destroy/{id}', 'destroy')->name('post.destroy');
    });
    /* Akhir */

    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');
});


/* Akhir */