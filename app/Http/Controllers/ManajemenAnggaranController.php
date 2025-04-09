<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManajemenAnggaranController extends Controller
{
    public function ManajemenAnggaran(){
        return view('pages.dashboard.Anggaran.list_anggaran');
    }
}
