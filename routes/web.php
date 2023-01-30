<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\IbadahController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\KeluargaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [HomeController::class, 'index']);

Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'Authenticating'])->middleware('guest');
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');
Route::get('/admin', [AdminController::class, 'index'])->middleware('auth');

// Kerluarga
Route::get('/data-kk', [KeluargaController::class, 'data'])->middleware('auth');
Route::get('/input-kk', [KeluargaController::class, 'input'])->middleware('auth');
Route::post('/keluarga-add', [KeluargaController::class, 'create_keluarga'])->middleware('auth');
Route::get('/detail-kk/{id}', [KeluargaController::class, 'show'])->middleware('auth');
Route::get('/edit-kk/{id}', [KeluargaController::class, 'edit_kk'])->middleware('auth');
Route::put('/update-keluarga/{id}', [KeluargaController::class, 'update_keluarga'])->middleware('auth');
Route::get('/delete-keluarga/{id}', [KeluargaController::class, 'delete_keluarga'])->middleware('auth');
Route::delete('/destroy-keluarga/{id}', [KeluargaController::class, 'destroy_keluarga'])->middleware('auth');

// Anggota Keluarga
Route::get('/input-anggota/{id}', [KeluargaController::class, 'input_anggota'])->middleware('auth');
Route::post('/anggota-add', [KeluargaController::class, 'create_anggota'])->middleware('auth');
Route::get('/edit-anggota/{id}', [KeluargaController::class, 'edit_anggota'])->middleware('auth');
Route::put('/update-anggota/{id}', [KeluargaController::class, 'update_anggota'])->middleware('auth');
Route::get('/delete-anggota/{id}', [KeluargaController::class, 'delete_anggota'])->middleware('auth');
Route::delete('/destroy-anggota/{id}', [KeluargaController::class, 'destroy_anggota'])->middleware('auth');

// Jadwal Ibadah
Route::get('/data-ibadah', [IbadahController::class, 'data'])->middleware('auth');
Route::get('/input-ibadah', [IbadahController::class, 'input'])->middleware('auth');
Route::post('/ibadah-add', [IbadahController::class, 'create_ibadah'])->middleware('auth');
Route::get('/edit-ibadah/{id}', [IbadahController::class, 'edit_ibadah'])->middleware('auth');
Route::put('/update-ibadah/{id}', [IbadahController::class, 'update_ibadah'])->middleware('auth');
Route::get('/delete-ibadah/{id}', [IbadahController::class, 'delete_ibadah'])->middleware('auth');
Route::delete('/destroy-ibadah/{id}', [IbadahController::class, 'destroy_ibadah'])->middleware('auth');