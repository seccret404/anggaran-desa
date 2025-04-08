<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataFeed;

class DashboardController extends Controller
{
    public function index()
    {
        $dataFeed = new DataFeed();

        return view('pages/dashboard/dashboard', compact('dataFeed'));
    }

    public function LaporanKeuangan(){
        return view('pages.dashboard.Keuangan.laporan_keuangan');
    }

    public function FormPengeluaran(){
        return view('pages.dashboard.Keuangan.form_pengeluaran');
    }

    public function FormPemasukan(){
        return view('pages.dashboard.Keuangan.form_pemasukan');
    }
    public function DetailPengeluaran(){
        return view('pages.dashboard.Keuangan.detail_pengeluaran');
    }
    public function DetailPemasukan(){
        return view('pages.dashboard.Keuangan.detail_pemasukan');
    }

}
