<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramDesaController extends Controller
{
    public function ProgramDesa(){
        return view('pages.dashboard.Program_Desa.program_desa');
    }

    public function FormProgramDesa(){
        return view('pages.dashboard.Program_Desa.form_program_desa');
    }
}
