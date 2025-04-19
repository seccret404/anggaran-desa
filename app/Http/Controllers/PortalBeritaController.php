<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortalBeritaController extends Controller
{
    public function PortalBerita(){
        return view('pages.dashboard.Portal_Berita.portal_berita');
    }

    public function FormPortalBerita(){
        return view('pages.dashboard.Portal_Berita.form_portal_berita');
    }
}
