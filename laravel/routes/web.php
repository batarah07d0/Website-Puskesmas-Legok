<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\ProgramKegiatanController;
use App\Http\Controllers\StrukturOrganisasiController;
use App\Http\Controllers\StaffController;
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
Route::get('/login', function () {
    return view('login');
});

/* Pasien */
Route::get('/pasien', [PasienController::class, 'index']);
Route::delete('/pasien/{id}', [PasienController::class, 'delete']);
Route::delete('/pasien/{id}/forceDelete', [PasienController::class, 'forceDelete']);
Route::post('/pasien/store', [PasienController::class, 'store']);
Route::put('/pasien/{id}/update', [PasienController::class, 'update']);
Route::post('/pasien/{id}/restore', [PasienController::class, 'restore']);
/* Akhir */

/*  Dokter */
Route::get('/dokters', [DokterController::class, 'index']);
Route::get('/dokters/create', [DokterController::class, 'create']);
Route::post('/dokters', [DokterController::class, 'store']);
Route::get('/dokters/{id}/edit', [DokterController::class, 'edit']);
Route::put('/dokters/{id}', [DokterController::class, 'update']);
Route::get('/dokters/{id}/edit-jadwal', [DokterController::class, 'editJadwalPraktek']);
Route::put('/dokters/{id}/update-jadwal', [DokterController::class, 'updateJadwalPraktek']);
Route::delete('/dokters/{id}', [DokterController::class, 'destroy']);
/* Akhir */

/* Staff */
Route::get('/staff', [StaffController::class, 'index'])->name('staff.index');
Route::get('/staff/create', [StaffController::class, 'create'])->name('staff.create');
Route::post('/staff/store', [StaffController::class, 'store'])->name('staff.store');
Route::get('/staff/{id}/edit', [StaffController::class, 'edit'])->name('staff.edit');
Route::put('/staff/{id}/update', [StaffController::class, 'update'])->name('staff.update');
Route::delete('/staff/{id}/destroy', [StaffController::class, 'destroy'])->name('staff.destroy');
/* Akhir */


/* Fasilitas */
Route::get('/fasilitas/force-delete/{id}', [FasilitasController::class, 'forceDelete']);
/* Akhir */

/* Prestasi */
Route::get('/prestasi', [PrestasiController::class, 'index']);
Route::get('/prestasi/create', [PrestasiController::class, 'create']);
Route::post('/prestasi/store', [PrestasiController::class, 'store']);
/* Akhir */

/* Program Kegiatan */
Route::get('/program-kegiatan', [ProgramKegiatanController::class, 'index']);
Route::get('/program-kegiatan/create', [ProgramKegiatanController::class, 'create']);
Route::post('/program-kegiatan/store', [ProgramKegiatanController::class, 'store']);
/*  Akhir */

/* Struktur Organisasi */
Route::get('/struktur-organisasi', [StrukturOrganisasiController::class, 'index']);
Route::get('/struktur-organisasi/create', [StrukturOrganisasiController::class, 'create']);
Route::post('/struktur-organisasi', [StrukturOrganisasiController::class, 'store']);
Route::get('/struktur-organisasi/{id}/edit', [StrukturOrganisasiController::class, 'edit']);
Route::put('/struktur-organisasi/{id}', [StrukturOrganisasiController::class, 'update']);
Route::delete('/struktur-organisasi/{id}', [StrukturOrganisasiController::class, 'destroy']);
/* Akhir */