<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\CampaignController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DataFeedController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\ManajemenAnggaranController;

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

//user
Route::get('/', [UserController::class, 'index'])->name('user');
Route::get('/user/layanan/laporan-keuangan', [UserController::class, 'layanan_laporan_keuangan'])->name('laporankeuangan');
Route::get('/user/layanan/pogram-desa', [UserController::class, 'layanan_program_desa'])->name('programdesa');
Route::get('/user/berita/portal-berita', [UserController::class, 'portal_berita'])->name('portalberita');
Route::get('/user/berita/detail-portal-berita', [UserController::class, 'detail_portal_berita'])->name('detailportalberita');
Route::get('/user/kebijakan/kebijakan-desa', [UserController::class, 'kebijakan_desa'])->name('kebijakandesa');


// Route::redirect('/', 'login');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

//admin
Route::get('/dashboard/admin/laporan-keuangan', [DashboardController::class,'LaporanKeuangan'])->name('laporan.keuangan');
Route::get('/dashboard/admin/form-pengeluaran', [DashboardController::class,'FormPengeluaran'])->name('laporan.pengeluaran');
Route::get('/dashboard/admin/form-pemasukan', [DashboardController::class,'FormPemasukan'])->name('laporan.pemasukan');
Route::get('/dashboard/admin/detail-pengeluaran', [DashboardController::class,'DetailPengeluaran'])->name('detail.pengeluaran');
Route::get('/dashboard/admin/detail-pemasukan', [DashboardController::class,'DetailPemasukan'])->name('detail.pemasukan');


Route::get('/dashboard/admin/manajemen-anggaran',[ManajemenAnggaranController::class,'manajemenAnggaran'])->name('manajemen.anggaran');
