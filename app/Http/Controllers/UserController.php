<?php

namespace App\Http\Controllers;

use App\Models\DataFeed;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $dataFeed = new DataFeed();

        return view('pages/user/home', compact('dataFeed'));
    }

    public function layanan_laporan_keuangan()
    {
        $dataFeed = new DataFeed();

        return view('pages/user/layanan/laporan_keuangan', compact('dataFeed'));
    }

    public function layanan_program_desa()
    {
        $dataFeed = new DataFeed();

        return view('pages/user/layanan/program_desa', compact('dataFeed'));
    }

    public function portal_berita()
    {
        $dataFeed = new DataFeed();

        return view('pages/user/berita/portal_berita', compact('dataFeed'));
    }

    public function detail_portal_berita()
    {
        $dataFeed = new DataFeed();

        return view('pages/user/berita/detail_portal_berita', compact('dataFeed'));
    }

    public function kebijakan_desa()
    {
        $dataFeed = new DataFeed();

        return view('pages/user/kebijakan/kebijakan_desa', compact('dataFeed'));
    }
}
