<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function tables()
    {
        return view('tables');
    }

    public function pasien()
    {
        return view('pasien.dashboard');
    }
}
