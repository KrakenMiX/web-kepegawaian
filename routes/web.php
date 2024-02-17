<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\AbsenController;

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

/*
|--------------------------------------------------------------------------
| Web Routes - Identitas Diri
|--------------------------------------------------------------------------
|   Nama : Ilmi Fathurrahman Ghazali
|   NIM : 10121157
|   Kelas : IF4
*/

Route::get('/', [LoginController::class, 'login'])->name('login');
Route::get('home', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('pegawai', [PegawaiController::class, 'index'])->name('pegawai')->middleware('auth');
Route::get('job', [JobController::class, 'index'])->name('job')->middleware('auth');
Route::get('absen', [AbsenController::class, 'index'])->name('absen')->middleware('auth');

//Function Route Admin :
//LOGIN & LOGOUT
Route::get('login', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

//REGISTER
Route::get('register', [RegisterController::class, 'register'])->name('register');
Route::post('register/action', [RegisterController::class, 'actionregister'])->name('actionregister');

//PEGAWAI
Route::get('tambah_pegawai', [PegawaiController::class, 'tambah_pegawai'])->name('tambah_pegawai');
Route::post('proses_tambah_pegawai', [PegawaiController::class, 'proses_tambah_pegawai'])->name('proses_tambah_pegawai');
Route::post('proses_edit_pegawai', [PegawaiController::class, 'proses_edit_pegawai'])->name('proses_edit_pegawai');
Route::get('edit_pegawai', [PegawaiController::class, 'edit_pegawai'])->name('edit_pegawai');
Route::get('proses_hapus_pegawai', [PegawaiController::class, 'proses_hapus_pegawai'])->name('proses_hapus_pegawai');

//JOB
Route::get('tambah_job', [JobController::class, 'tambah_job'])->name('tambah_job');
Route::post('proses_tambah_job', [JobController::class, 'proses_tambah_job'])->name('proses_tambah_job');
Route::post('proses_edit_job', [JobController::class, 'proses_edit_job'])->name('proses_edit_job');
Route::get('edit_job', [JobController::class, 'edit_job'])->name('edit_job');
Route::get('proses_hapus_job', [JobController::class, 'proses_hapus_job'])->name('proses_hapus_job');

//ABSEN
Route::get('tambah_absen', [AbsenController::class, 'tambah_absen'])->name('tambah_absen');
Route::post('proses_tambah_absen', [AbsenController::class, 'proses_tambah_absen'])->name('proses_tambah_absen');
Route::get('lihat_absen', [AbsenController::class, 'lihat_absen'])->name('lihat_absen');
Route::get('proses_hapus_absen', [AbsenController::class, 'proses_hapus_absen'])->name('proses_hapus_absen');
