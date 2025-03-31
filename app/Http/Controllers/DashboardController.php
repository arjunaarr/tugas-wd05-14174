<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Login;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Simulasi user login sementara
        $user = (object) [
            'name' => 'pasien',
            'role' => 'dokter', // Ubah ke 'pasien' untuk testing pasien
        ];

        return view('layout.components.main', compact('user'));
    }   

    public function auth(): view
    {
        return view('auth.login');
    }

    public function register(): view
    {
        return view('auth.register');

    }

    public function dokter(): view
    {
        return view('dokter.dashboard');
    } 

    public function periksa(): view
    {
        return view('dokter.periksa');
    } 

    public function obat(): view
    {
        return view('dokter.obat');
    } 

    public function pasien(): view
    {
        return view('pasien.dashboard',);
        
    }

    public function riwayat(): view
    {
        return view('pasien.riwayat');
    } 

    public function periksaa(): view
    {
        return view('pasien.periksaa',);
    
    }
    

    
}
