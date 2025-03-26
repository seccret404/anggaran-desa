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
}
