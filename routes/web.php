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


Route::get('/', [UserController::class, 'index'])->name('user');


// Route::redirect('/', 'login');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

//admin
Route::get('/dashboard/admin/laporan-keuangan', [DashboardController::class,'LaporanKeuangan'])->name('laporan.keuangan');
Route::get('/dashboard/admin/form-pengeluaran', [DashboardController::class,'FormPengeluaran'])->name('laporan.pengeluaran');
Route::get('/dashboard/admin/form-pemasukan', [DashboardController::class,'FormPemasukan'])->name('laporan.pemasukan');
Route::get('/dashboard/admin/detail-pengeluaran', [DashboardController::class,'DetailPengeluaran'])->name('detail.pengeluaran');
Route::get('/dashboard/admin/detail-pemasukan', [DashboardController::class,'DetailPemasukan'])->name('detail.pemasukan');
